<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fossils
        //  Abundant Ammonites
        //	Acritarchs
        //	Algal Fossils
        //	Ancient Fossils
        //	Bivalves
        //	Brachiopod Fossils
        //	Dinosaur Fossils
        //	Extinct Birds
        //	Graptolite Fossil
        //	Human Footprints In Volcanic Ash
        //	Invertebrates
        //	Jawless Fossil Fish Astraspis
        //	Mammoth Teeth Fossils
        //	Marine Fossils
        //	Micro Fossils
        //	Plants
        //	Plants Fossils
        //	Rugose Coral Fossils
        //	Shark Teeth Fossils
        //	Stromatolite Fossils
        //	Stromatolites
        //	Terrestrial Fossils
        //	Trace Fossils
        //	Trees Entombed By Lava Flow
        //	Vertebrate Fossils
        //	Vertebrates

        Feature::where('name', 'Fossils')->first()
            ->types()->attach([
                Type::where('name', 'Abundant Ammonites')->first()->id,
                Type::where('name', 'Acritarchs')->first()->id,
                Type::where('name', 'Algal Fossils')->first()->id,
                Type::where('name', 'Ancient Fossils')->first()->id,
                Type::where('name', 'Bivalves')->first()->id,
                Type::where('name', 'Brachiopod Fossils')->first()->id,
                Type::where('name', 'Dinosaur Fossils')->first()->id,
                Type::where('name', 'Extinct Birds')->first()->id,
                Type::where('name', 'Graptolite Fossil')->first()->id,
                Type::where('name', 'Human Footprints In Volcanic Ash')->first()->id,
                Type::where('name', 'Invertebrates')->first()->id,
                Type::where('name', 'Jawless Fossil Fish Astraspis')->first()->id,
                Type::where('name', 'Mammoth Teeth Fossils')->first()->id,
                Type::where('name', 'Marine Fossils')->first()->id,
                Type::where('name', 'Micro Fossils')->first()->id,
                Type::where('name', 'Plants')->first()->id,
                Type::where('name', 'Plants Fossils')->first()->id,
                Type::where('name', 'Rugose Coral Fossils')->first()->id,
                Type::where('name', 'Shark Teeth Fossils')->first()->id,
                Type::where('name', 'Stromatolite Fossils')->first()->id,
                Type::where('name', 'Stromatolites')->first()->id,
                Type::where('name', 'Terrestrial Fossils')->first()->id,
                Type::where('name', 'Trace Fossils')->first()->id,
                Type::where('name', 'Trees Entombed By Lava Flow')->first()->id,
                Type::where('name', 'Vertebrate Fossils')->first()->id,
                Type::where('name', 'Vertebrates')->first()->id,
            ]);


        //Glacier
        //  Blackfoot Glacier
        //	Grinnell Glacier
        //	Jackson Glacier
        //	Medano Creek
        //	Piegan Glacier
        //	Salamander Glacier
        //	Sperry Glacier

        Feature::where('name', 'Glacier')->first()
            ->types()->attach([
                Type::where('name', 'Blackfoot Glacier')->first()->id,
                Type::where('name', 'Grinnell Glacier')->first()->id,
                Type::where('name', 'Jackson Glacier')->first()->id,
                Type::where('name', 'Medano Creek')->first()->id,
                Type::where('name', 'Piegan Glacier')->first()->id,
                Type::where('name', 'Salamander Glacier')->first()->id,
                Type::where('name', 'Sperry Glacier')->first()->id,
            ]);

        //Hazards/Risk
        //  Burned out stump holes
        //	Dangerous Animals
        //	Debris Flow
        //	Earthquakes
        //	Flash flooding
        //	Flash Floods
        //	Glacial hazards
        //	High Elevation
        //	Hot Sand
        //	Hydrothermal Explosions
        //	Ice avalanche
        //	Landslides
        //	Lava flows
        //	Lightning
        //	Logs and rolling debris
        //	Mine Hazards
        //	Rock Falls
        //	Sand Collapse
        //	Uneven terrain.
        //	Unstable rocky slopes
        //	Volcanic Activity
        //	Volcanic Eruptions
        Feature::where('name', 'Hazards/Risk')->first()
            ->types()->attach([
                Type::where('name', 'Burned out stump holes')->first()->id,
                Type::where('name', 'Dangerous Animals')->first()->id,
                Type::where('name', 'Debris Flow')->first()->id,
                Type::where('name', 'Earthquakes')->first()->id,
                Type::where('name', 'Flash flooding')->first()->id,
                Type::where('name', 'Flash Floods')->first()->id,
                Type::where('name', 'Glacial hazards')->first()->id,
                Type::where('name', 'High Elevation')->first()->id,
                Type::where('name', 'Hot Sand')->first()->id,
                Type::where('name', 'Hydrothermal Explosions')->first()->id,
                Type::where('name', 'Ice avalanche')->first()->id,
                Type::where('name', 'Landslides')->first()->id,
                Type::where('name', 'Lava flows')->first()->id,
                Type::where('name', 'Lightning')->first()->id,
                Type::where('name', 'Logs and rolling debris')->first()->id,
                Type::where('name', 'Mine Hazards')->first()->id,
                Type::where('name', 'Rock Falls')->first()->id,
                Type::where('name', 'Sand Collapse')->first()->id,
                Type::where('name', 'Uneven terrain.')->first()->id,
                Type::where('name', 'Unstable rocky slopes')->first()->id,
                Type::where('name', 'Volcanic Activity')->first()->id,
                Type::where('name', 'Volcanic Eruptions')->first()->id,
            ]);

        //Minerals
        //  Altyn
        //	Alumina
        //	Amphibole
        //	Antimony
        //	Calcium
        //	Calcium Carbonate
        //	Copper
        //	Ferro- Magnesian
        //	Gold
        //	Gypsum
        //	Helena
        //	Lead
        //	Magnesium
        //	Molybdenum
        //	Olivine
        //	Orthoclase
        //	Piagioclase
        //	Potassium
        //	Pyroxene
        //	Quartz
        //	Shepard
        //	Silica
        //	Silver
        //	Tungsten
        //	Uranium
        //	Zinc

        Feature::where('name', 'Minerals')->first()
            ->types()->attach([
                Type::where('name', 'Altyn')->first()->id,
                Type::where('name', 'Alumina')->first()->id,
                Type::where('name', 'Amphibole')->first()->id,
                Type::where('name', 'Antimony')->first()->id,
                Type::where('name', 'Calcium')->first()->id,
                Type::where('name', 'Calcium Carbonate')->first()->id,
                Type::where('name', 'Copper')->first()->id,
                Type::where('name', 'Ferro- Magnesian')->first()->id,
                Type::where('name', 'Gold')->first()->id,
                Type::where('name', 'Gypsum')->first()->id,
                Type::where('name', 'Helena')->first()->id,
                Type::where('name', 'Lead')->first()->id,
                Type::where('name', 'Magnesium')->first()->id,
                Type::where('name', 'Molybdenum')->first()->id,
                Type::where('name', 'Olivine')->first()->id,
                Type::where('name', 'Orthoclase')->first()->id,
                Type::where('name', 'Piagioclase')->first()->id,
                Type::where('name', 'Potassium')->first()->id,
                Type::where('name', 'Pyroxene')->first()->id,
                Type::where('name', 'Quartz')->first()->id,
                Type::where('name', 'Shepard')->first()->id,
                Type::where('name', 'Silica')->first()->id,
                Type::where('name', 'Silver')->first()->id,
                Type::where('name', 'Tungsten')->first()->id,
                Type::where('name', 'Uranium')->first()->id,
                Type::where('name', 'Zinc')->first()->id,
            ]);

        //Mountains
        //  Beartooth
        //	Black
        //	Eagle Peak - Highest
        //	Elk
        //	Funeral
        //	Gallatin
        //	Grapevine
        //	Hot Springs
        //	Kendrick
        //	Kintla Kinnerly
        //	Lindbergh Hill - Highest
        //	Mount Carter
        //	Mount Cleveland  - Highest
        //	Mount Sheridan
        //	Mount Stimson
        //	Mount Tipton
        //	Mount Washburn
        //	Music
        //	North
        //	Saddle
        //	San Juan - Highest
        //	Sangre De Cristo
        //	Sugarloaf
        //	Telescope Peak - Highest
        //	West Mountain - Highest
        //	Yellowstone Caldera

        Feature::where('name', 'Mountains')->first()
            ->types()->attach([
                Type::where('name', 'Beartooth')->first()->id,
                Type::where('name', 'Black')->first()->id,
                Type::where('name', 'Eagle Peak - Highest')->first()->id,
                Type::where('name', 'Elk')->first()->id,
                Type::where('name', 'Funeral')->first()->id,
                Type::where('name', 'Gallatin')->first()->id,
                Type::where('name', 'Grapevine')->first()->id,
                Type::where('name', 'Hot Springs')->first()->id,
                Type::where('name', 'Kendrick')->first()->id,
                Type::where('name', 'Kintla Kinnerly')->first()->id,
                Type::where('name', 'Lindbergh Hill - Highest')->first()->id,
                Type::where('name', 'Mount Carter')->first()->id,
                Type::where('name', 'Mount Cleveland  - Highest')->first()->id,
                Type::where('name', 'Mount Sheridan')->first()->id,
                Type::where('name', 'Mount Stimson')->first()->id,
                Type::where('name', 'Mount Tipton')->first()->id,
                Type::where('name', 'Mount Washburn')->first()->id,
                Type::where('name', 'Music')->first()->id,
                Type::where('name', 'North')->first()->id,
                Type::where('name', 'Saddle')->first()->id,
                Type::where('name', 'San Juan - Highest')->first()->id,
                Type::where('name', 'Sangre De Cristo')->first()->id,
                Type::where('name', 'Sugarloaf')->first()->id,
                Type::where('name', 'Telescope Peak - Highest')->first()->id,
                Type::where('name', 'West Mountain - Highest')->first()->id,
                Type::where('name', 'Yellowstone Caldera')->first()->id,
            ]);

        //Plate Tectonics / Geologic Formation
        //	Being Shaped By Shifts Of Its Tectonic Plate, The Pacific Plate.
        //	Flat-Slab Subduction
        //	Formed By The Right Combinations Of Wind, Water, And Sediment.
        //	Forming As The North American Tectonic Plate Is Ripping Apart In The Basin And Range Province.
        //	Found Within The Zig-Zag Mountains, Which Are Part Of The Ouachita Mountains And Eastern Oklahoma.
        //	Interaction Between Tectonic Plates And The Resulting Chain Of Volcanoes.
        //	Sits On The Boundary Between Two Of The Earth'S Major Crustal
        //	Tectonic Hotspot.
        //	Uplift Of The Colorado Plateau.

        Feature::where('name', 'Plate Tectonics / Geologic Formation')->first()
            ->types()->attach([
                Type::where('name', 'Being Shaped By Shifts Of Its Tectonic Plate, The Pacific Plate.')->first()->id,
                Type::where('name', 'Flat-Slab Subduction')->first()->id,
                Type::where('name', 'Formed By The Right Combinations Of Wind, Water, And Sediment.')->first()->id,
                Type::where('name', 'Forming As The North American Tectonic Plate Is Ripping Apart In The Basin And Range Province.')->first()->id,
                Type::where('name', 'Found Within The Zig-Zag Mountains, Which Are Part Of The Ouachita Mountains And Eastern Oklahoma.')->first()->id,
                Type::where('name', 'Interaction Between Tectonic Plates And The Resulting Chain Of Volcanoes.')->first()->id,
                Type::where('name', 'Sits On The Boundary Between Two Of The Earth\'S Major Crustal')->first()->id,
                Type::where('name', 'Tectonic Hotspot.')->first()->id,
                Type::where('name', 'Uplift Of The Colorado Plateau.')->first()->id,
            ]);

        //Rivers/Streams
        //  Amargosa
        //	Big Thompson
        //	Birch
        //	Cache la Poudre
        //	Colorado
        //	Colorado River
        //	Firehole River
        //	Gardner River
        //	Havasu creeks
        //	Hot Springs
        //	Kanab
        //	Lamar River
        //	Marias Rivers
        //	McDonald Creek
        //	Medano Creek
        //	Mississippi
        //	Missouri
        //	Paria River
        //	Snake River
        //	Yellowstone River

        Feature::where('name', 'Rivers/Streams')->first()
            ->types()->attach([
                Type::where('name', 'Amargosa')->first()->id,
                Type::where('name', 'Big Thompson')->first()->id,
                Type::where('name', 'Birch')->first()->id,
                Type::where('name', 'Cache la Poudre')->first()->id,
                Type::where('name', 'Colorado')->first()->id,
                Type::where('name', 'Colorado River')->first()->id,
                Type::where('name', 'Firehole River')->first()->id,
                Type::where('name', 'Gardner River')->first()->id,
                Type::where('name', 'Havasu creeks')->first()->id,
                Type::where('name', 'Hot Springs')->first()->id,
                Type::where('name', 'Kanab')->first()->id,
                Type::where('name', 'Lamar River')->first()->id,
                Type::where('name', 'Marias Rivers')->first()->id,
                Type::where('name', 'McDonald Creek')->first()->id,
                Type::where('name', 'Medano Creek')->first()->id,
                Type::where('name', 'Mississippi')->first()->id,
                Type::where('name', 'Missouri')->first()->id,
                Type::where('name', 'Paria River')->first()->id,
                Type::where('name', 'Snake River')->first()->id,
                Type::where('name', 'Yellowstone River')->first()->id,
            ]);


        //Rocks
        //  Igneous
        //	Igneous - Andesite
        //	Igneous - Basalt
        //	Igneous - Basaltic Andesite
        //	Igneous - Dacite
        //	Igneous - Granite
        //	Igneous - Pegmatite
        //	Igneous - Rhyodacite
        //	Igneous - Rhyolite
        //	Metamorphic - Conglomerate
        //	Metamorphic - Gneiss
        //	Metamorphic - Schist
        //	Sedimentary -  Novaculite
        //	Sedimentary - Chert
        //	Sedimentary - Conglomerate
        //	Sedimentary - Hornfels
        //	Sedimentary - Limestone
        //	Sedimentary - Marble
        //	Sedimentary - Sandstones
        //	Sedimentary - Shale

        Feature::where('name', 'Rocks')->first()
            ->types()->attach([
                Type::where('name', 'Igneous')->first()->id,
                Type::where('name', 'Igneous - Andesite')->first()->id,
                Type::where('name', 'Igneous - Basalt')->first()->id,
                Type::where('name', 'Igneous - Basaltic Andesite')->first()->id,
                Type::where('name', 'Igneous - Dacite')->first()->id,
                Type::where('name', 'Igneous - Granite')->first()->id,
                Type::where('name', 'Igneous - Pegmatite')->first()->id,
                Type::where('name', 'Igneous - Rhyodacite')->first()->id,
                Type::where('name', 'Igneous - Rhyolite')->first()->id,
                Type::where('name', 'Metamorphic - Conglomerate')->first()->id,
                Type::where('name', 'Metamorphic - Gneiss')->first()->id,
                Type::where('name', 'Metamorphic - Schist')->first()->id,
                Type::where('name', 'Sedimentary -  Novaculite')->first()->id,
                Type::where('name', 'Sedimentary - Chert')->first()->id,
                Type::where('name', 'Sedimentary - Conglomerate')->first()->id,
                Type::where('name', 'Sedimentary - Hornfels')->first()->id,
                Type::where('name', 'Sedimentary - Limestone')->first()->id,
                Type::where('name', 'Sedimentary - Marble')->first()->id,
                Type::where('name', 'Sedimentary - Sandstones')->first()->id,
                Type::where('name', 'Sedimentary - Shale')->first()->id,
            ]);

        //Volcanoes/Volcanic Activity
        //  Crater lakes
        //	Kīlauea
        //	Lava Cliffs
        //	Maunaloa
        //	The Uinkaret volcanic field
        //	Ubehebe Crater
        //	Yellowstone Caldera
        Feature::where('name', 'Volcanoes/Volcanic Activity')->first()
            ->types()->attach([
                Type::where('name', 'Crater lakes')->first()->id,
                Type::where('name', 'Kīlauea')->first()->id,
                Type::where('name', 'Lava Cliffs')->first()->id,
                Type::where('name', 'Maunaloa')->first()->id,
                Type::where('name', 'The Uinkaret volcanic field')->first()->id,
                Type::where('name', 'Ubehebe Crater')->first()->id,
                Type::where('name', 'Yellowstone Caldera')->first()->id,
            ]);

        //Weather/Climate
        //  Summers - comfortable
        //  Summers - comfortable
        //  Summers - comfortable, windy, and partly cloudy
        //  Summers - hot and muggy
        //  Summers - short, comfortable, dry, mostly clear.
        //  Summers - unpredictable
        //  Summers - very hot
        //  Summers - warm
        //  Summers - warm and dry
        //  Summers - warm, dry, and mostly clear
        //  Winters -  cloudy, snowy
        //  Winters -  comfortable, windy, and partly cloudy
        //  Winters -  freezing and snowy, mostly clear year round
        //  Winters -  freezing, snowy, and windy; partly cloudy year round
        //  Winters -  mild
        //  Winters -  semi-arid with mild
        //  Winters - very cold, snowy, and partly cloudy.
        //  Winters - are freezing, snowy, and partly cloudy.
        //  Winters - freezing, snowy, and partly cloudy.
        //  Winters - very cold and wet, and partly cloudy

        Feature::where('name', 'Weather/Climate')->first()
            ->types()->attach([
                Type::where('name', 'Summers - comfortable')->first()->id,
                Type::where('name', 'Summers - comfortable, windy, and partly cloudy')->first()->id,
                Type::where('name', 'Summers - hot and muggy')->first()->id,
                Type::where('name', 'Summers - short, comfortable, dry, mostly clear.')->first()->id,
                Type::where('name', 'Summers - unpredictable')->first()->id,
                Type::where('name', 'Summers - very hot')->first()->id,
                Type::where('name', 'Summers - warm')->first()->id,
                Type::where('name', 'Summers - warm and dry')->first()->id,
                Type::where('name', 'Summers - warm, dry, and mostly clear')->first()->id,
                Type::where('name', 'Winters -  cloudy, snowy')->first()->id,
                Type::where('name', 'Winters -  comfortable, windy, and partly cloudy')->first()->id,
                Type::where('name', 'Winters -  freezing and snowy, mostly clear year round')->first()->id,
                Type::where('name', 'Winters -  freezing, snowy, and windy; partly cloudy year round')->first()->id,
                Type::where('name', 'Winters -  mild')->first()->id,
                Type::where('name', 'Winters -  semi-arid with mild')->first()->id,
                Type::where('name', 'Winters - very cold, snowy, and partly cloudy.')->first()->id,
                Type::where('name', 'Winters - are freezing, snowy, and partly cloudy.')->first()->id,
                Type::where('name', 'Winters - freezing, snowy, and partly cloudy.')->first()->id,
                Type::where('name', 'Winters - very cold and wet, and partly cloudy')->first()->id,
            ]);


    }
}
