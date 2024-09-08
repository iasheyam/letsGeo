<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fossils
        //Glacier
        //Hazards/Risk
        //Minerals
        //Mountains
        //Plate Tectonics / Geologic Formation
        //Rivers/Streams
        //Rocks
        //Volcanoes/Volcanic Activity
        //Weather/Climate

        $features = [
            [
                'name' => 'Fossils',
                'description' => 'Fossils are the preserved remains or traces of animals, plants, and other organisms from the remote past. The totality of fossils, both discovered and undiscovered, and their placement in fossiliferous (fossil-containing) rock formations and sedimentary layers (strata) is known as the fossil record.
                source: https://en.wikipedia.org/wiki/Fossil',
            ],
            [
                'name' => 'Glacier',
                'description' => 'A glacier is a persistent body of dense ice that is constantly moving under its own weight. It forms where the accumulation of snow exceeds its ablation over many years, often centuries. Glaciers slowly deform and flow due to stresses induced by their weight, creating crevasses, seracs and other distinguishing features.
                source: https://en.wikipedia.org/wiki/Glacier',
            ],
            [
                'name' => 'Hazards/Risk',
                'description' => 'A hazard is a situation that has the potential to cause harm to people, the environment, property, or any combination of these. A risk is the chance that a hazard will cause harm. The risk is a function of the probability of the hazard and the severity of the potential harm.
                source: https://en.wikipedia.org/wiki/Hazard',
            ],
            [
                'name' => 'Minerals',
                'description' => 'A mineral is a naturally occurring chemical compound, usually of crystalline form and abiogenic in origin. A mineral has one specific chemical composition, whereas a rock can be an aggregate of different minerals or mineraloids. The study of minerals is called mineralogy.
                source: https://en.wikipedia.org/wiki/Mineral',
            ],
            [
                'name' => 'Mountains',
                'description' => 'A mountain is a large landform that stretches above the surrounding land in a limited area, usually in the form of a peak. A mountain is generally steeper than a hill. Mountains are formed through tectonic forces or volcanism. These forces can locally raise the surface of the earth. Mountains erode slowly through the action of rivers, weather conditions, and glaciers.
                source: https://en.wikipedia.org/wiki/Mountain',
            ],
            [
                'name' => 'Plate Tectonics / Geologic Formation',
                'description' => 'Plate tectonics is a scientific theory describing the large-scale motion of seven large plates and the movements of a larger number of smaller plates of the Earth\'s lithosphere, since tectonic processes began on Earth between 3.5 and 3.8 billion years ago. The theory builds on the concept of continental drift developed
                 source: https://en.wikipedia.org/wiki/Plate_tectonics',
            ],
            [
                'name' => 'Rivers/Streams',
                'description' => 'A river is a natural flowing watercourse, usually freshwater, flowing towards an ocean, sea, lake or another river. In some cases a river simply flows into the ground and becomes dry at the end of its course without reaching another body of water. Small rivers can be referred to using names such as stream, creek, brook, rivulet, and rill.
                source: https://en.wikipedia.org/wiki/River',
            ],
            [
                'name' => 'Rocks',
                'description' => 'A rock is a naturally occurring solid aggregate of one or more minerals or mineraloids. For example, the common rock granite is a combination of the quartz, feldspar and biotite minerals. The Earth\'s outer solid layer, the lithosphere, is made of rock.
                source: https://en.wikipedia.org/wiki/Rock',
            ],
            [
                'name' => 'Volcanoes/Volcanic Activity',
                'description' => 'A volcano is a rupture in the crust of a planetary-mass object, such as Earth, that allows hot lava, volcanic ash, and gases to escape from a magma chamber below the surface. Earth\'s volcanoes occur because its crust is broken into 17 major, rigid tectonic plates that float on a hotter, softer layer in its mantle.
                source: https://en.wikipedia.org/wiki/Volcano',
            ],
            [
                'name' => 'Weather/Climate',
                'description' => 'Weather is the state of the atmosphere, to the degree that it is hot or cold, wet or dry, calm or stormy, clear or cloudy. Most weather phenomena occur in the lowest level of the atmosphere, the troposphere, just below the stratosphere. Weather refers to day-to-day temperature and precipitation activity, whereas climate is the term for the averaging of atmospheric conditions over longer periods of time.
                source: https://en.wikipedia.org/wiki/Weather',
            ],
        ];

        DB::table('features')->insert($features);
    }
}
