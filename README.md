## Dev Steps

1. Open File with PHP

2. Convert File to Array

3. Loop through Array

4. Use Great Circle Distance to get all locations within 100KM

5. Sort Array by Affialte ID

6. Print out the results in HTML


## Relevant File Locations

1. app/Http/Controllers/DistanceController
2. routes/web.php
3. resources/views/distances.blade.php
4. tests/Feature/DistanceTest.php

## How To Run
1. Clone Repo into environment
2. Run 'composer update'
3. Run 'php artisan key:generate'
4. Run 'php artisan serve'
5. Go to 'http://127.0.0.1:8000/distances'




## Test Contents

# dev-codetest
Gambling.com Group Dev Code Test

Gambling.com Groups Irish office is in Dublin, where the best minds come together to solve Technical problems. 

The JSON-encoded affiliates.txt file attached contains a shortlist of affiliate contact records - one per line. 

We want to invite any affiliate that lives within 100km of our Dublin office for some food and drinks using this text file as the input (without being altered).

##Task
Write a program that will read the full list of affiliates from this txt file and output the name and IDs of matching affiliates within 100km, sorted by Affiliate ID (ascending).

You can use the first formula from this [Wikipedia article](https://en.wikipedia.org/wiki/Great-circle_distance) to calculate distance. Don't forget, you'll need to convert degrees to radians.

The GPS coordinates for our Dublin office are 53.3340285, -6.2535495.

You can find the affiliate list in this repository called affiliates.txt.

Please don’t forget, your code should be production ready, clean and tested!

## Nice to haves:
- Demonstrate understanding of MVC
- Unit Tests
- Basic HTML output
- Usage of a PHP Framework (We're a Laravel based company so bonus points for using that)
- Use the original txt file as input 






