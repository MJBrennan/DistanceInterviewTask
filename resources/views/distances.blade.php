<html>

<p><b>Distances less than 100km in affilates.txt</b></p>

<table>
	    <style>
      table,
      th,
      td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
	<tr>
		<td>Affiliate Id</td>
		<td>Name</td>
		<td>Latitude</td>
		<td>Longitude</td>
	</tr>
@foreach ($contents as $content)
<tr>
		<td>{{ $content['affiliate_id'] }}</td>
		<td>{{ $content['name'] }}</td>
		<td>{{ $content['latitude']  }}</td>
		<td>{{ $content['longitude'] }}</td>
	</tr>
@endforeach

</table>




</html>

