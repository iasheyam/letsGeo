<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crater Lake
        //Death Valley
        //Glacier
        //Grand Canyon
        //Great Sand Dunes
        //Hawaii Volcanoes
        //Hot Springs
        //Rocky Mountain
        //Wind Cave
        //Yellowstone

        $places = [
            [
                'name' => 'Crater Lake',
                'location' => 'Oregon',
                'description' => 'Crater Lake is a caldera lake in the U.S. state of Oregon. It is the deepest lake in the United States, with a maximum depth of 1,943 feet (594 m). The lake is famous for its water clarity, with a visibility of 193 feet (59 m) in 2009. The lake is the centerpiece of Crater Lake National Park, which surrounds it on three sides. The lake is fed entirely by rain and snowmelt, and is 2,148 feet (655 m) deep, making it the deepest lake in the United States. The lake is 6 miles (9.7 km) long and 1.5 miles (2.4 km) wide, and has a surface elevation of 6,173 feet (1,886 m). The lake is fed entirely by rain and snowmelt, and is 2,148 feet (655 m) deep, making it the deepest lake in the United States. The lake is 6 miles (9.7 km) long and 1.5 miles (2.4 km) wide, and has a surface elevation of 6,173 feet (1,886 m).',
                'website' => 'https://www.nps.gov/crla/index.htm',
            ],
            [
                'name' => 'Death Valley',
                'location' => 'California',
                'description' => 'Death Valley is a desert valley located in Eastern California. It is one of the hottest places in the world at the height of summer, and one of the most sparsely populated areas in the United States. The valley is bisected by a northwest-southeast trending valley trough that forms a graben. The valley is 282 miles (454 km) long and 53 miles (85 km) wide, and has an area of 3,000 square miles (7,800 km2). The valley is bisected by a northwest-southeast trending valley trough that forms a graben. The valley is 282 miles (454 km) long and 53 miles (85 km) wide, and has an area of 3,000 square miles (7,800 km2).',
                'website' => 'https://www.nps.gov/deva/index.htm',
            ],
            [
                'name' => 'Glacier',
                'location' => 'Montana',
                'description' => 'Glacier National Park is a national park located in the U.S. state of Montana. The park encompasses over 1 million acres (4,000 km2) of mountainous terrain, and includes parts of two mountain ranges, more than 130 named lakes, more than 1,000 different species of plants, and hundreds of species of animals. The park is bisected by the Continental Divide, and contains over 130 named lakes, more than 1,000 different species of plants, and hundreds of species of animals. The park is bisected by the Continental Divide, and contains over 130 named lakes, more than 1,000 different species of plants, and hundreds of species of animals.',
                'website' => 'https://www.nps.gov/glac/index.htm',
            ],
            [
                'name' => 'Grand Canyon',
                'location' => 'Arizona',
                'description' => 'The Grand Canyon is a steep-sided canyon carved by the Colorado River in the state of Arizona in the United States. The Grand Canyon is 277 miles (446 km) long, up to 18 miles (29 km) wide, and attains a depth of over a mile (6,000 feet or 1,800 meters). The Colorado River and its tributaries have cut their channels through layer after layer of sedimentary rock, while the Colorado Plateau was uplifted. The Colorado River and its tributaries have cut their channels through layer after layer of sedimentary rock, while the Colorado Plateau was uplifted. The Colorado River and its tributaries have cut their channels through layer after layer of sedimentary rock, while the Colorado Plateau was uplifted.',
                'website' => 'https://www.nps.gov/grca/index.htm',
            ],
            [
                'name' => 'Great Sand Dunes',
                'location' => 'Colorado',
                'description' => 'Great Sand Dunes National Park and Preserve is a United States National Park and Preserve located in the Sangre de Cristo Mountains of the southern Colorado Piedmont. The park is located in the Sangre de Cristo Mountains of the southern Colorado Piedmont. The park is located in the Sangre de Cristo Mountains of the southern Colorado Piedmont.',
                'website' => 'https://www.nps.gov/grsa/index.htm',
            ],
            [
                'name' => 'Hawaii Volcanoes',
                'location' => 'Hawaii',
                'description' => 'Hawaii Volcanoes National Park is a United States National Park located in the U.S. state of Hawaii. The park encompasses most of the island of Hawaii, which is the largest and southeastern-most island in the Hawaiian archipelago. The park encompasses most of the island of Hawaii, which is the largest and southeastern-most island in the Hawaiian archipelago. The park encompasses most of the island of Hawaii, which is the largest and southeastern-most island in the Hawaiian archipelago.',
                'website' => 'https://www.nps.gov/havo/index.htm',
            ],
            [
                'name' => 'Hot Springs',
                'location' => 'Arkansas',
                'description' => 'Hot Springs National Park is a United States National Park located in the city of Hot Springs, Arkansas. The park is located in the city of Hot Springs, Arkansas. The park is located in the city of Hot Springs, Arkansas.',
                'website' => 'https://www.nps.gov/hosp/index.htm',
            ],
            [
                'name' => 'Rocky Mountain',
                'location' => 'Colorado',
                'description' => 'Rocky Mountain National Park is a United States National Park located in the northern Front Range of the Rocky Mountains. The park is located in the northern Front Range of the Rocky Mountains. The park is located in the northern Front Range of the Rocky Mountains.',
                'website' => 'https://www.nps.gov/romo/index.htm',
            ],
            [
                'name' => 'Wind Cave',
                'location' => 'South Dakota',
                'description' => 'Wind Cave National Park is a United States National Park located in the Black Hills of South Dakota. The park is located in the Black Hills of South Dakota. The park is located in the Black Hills of South Dakota.',
                'website' => 'https://www.nps.gov/wica/index.htm',
            ],
            [
                'name' => 'Yellowstone',
                'location' => 'Wyoming',
                'description' => 'Yellowstone National Park is a national park located in the U.S. states of Wyoming, Montana, and Idaho. It was established by the U.S. Congress and signed into law by President Ulysses S. Grant on March 1, 1872',
                'website' => 'https://www.nps.gov/yell/index.htm',
            ],
        ];

        DB::table('places')->insert($places);
    }
}
