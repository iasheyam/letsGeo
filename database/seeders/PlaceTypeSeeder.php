<?php

namespace Database\Seeders;

use App\Models\Place;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crater Lake
        //  Alumina
        //	Crater lakes
        //	Earthquakes
        //	Ferro- Magnesian
        //	Igneous - Andesite
        //	Igneous - Basalt
        //	Igneous - Basaltic Andesite
        //	Igneous - Dacite
        //	Igneous - Rhyodacite
        //	Igneous - Rhyolite
        //	Interaction Between Tectonic Plates And The Resulting Chain Of Volcanoes.
        //	Landslides
        //	North
        //	Rock falls
        //	Silica
        //	Summers - warm, dry, and mostly clear
        //	Volcanic Activity
        //	Winters - very cold, snowy, and partly cloudy.

        Place::where('name', 'Crater Lake')->first()->types()->attach([
            Type::where('name', 'Alumina')->first()->id,
            Type::where('name', 'Crater lakes')->first()->id,
            Type::where('name', 'Earthquakes')->first()->id,
            Type::where('name', 'Ferro- Magnesian')->first()->id,
            Type::where('name', 'Igneous - Andesite')->first()->id,
            Type::where('name', 'Igneous - Basalt')->first()->id,
            Type::where('name', 'Igneous - Basaltic Andesite')->first()->id,
            Type::where('name', 'Igneous - Dacite')->first()->id,
            Type::where('name', 'Igneous - Rhyodacite')->first()->id,
            Type::where('name', 'Igneous - Rhyolite')->first()->id,
            Type::where('name', 'Interaction Between Tectonic Plates And The Resulting Chain Of Volcanoes.')->first()->id,
            Type::where('name', 'Landslides')->first()->id,
            Type::where('name', 'North')->first()->id,
            Type::where('name', 'Rock falls')->first()->id,
            Type::where('name', 'Silica')->first()->id,
            Type::where('name', 'Summers - warm, dry, and mostly clear')->first()->id,
            Type::where('name', 'Volcanic Activity')->first()->id,
            Type::where('name', 'Winters - very cold, snowy, and partly cloudy.')->first()->id,
        ]);

        //Death Valley
        //  Acritarchs
        //	Algal Fossils
        //	Amargosa
        //	Antimony
        //	Black
        //	Copper
        //	Dangerous Animals
        //	Forming As The North American Tectonic Plate Is Ripping Apart In The Basin And Range Province.
        //	Funeral
        //	Gold
        //	Grapevine
        //	Igneous - Andesite
        //	Igneous - Basalt
        //	Igneous - Dacite
        //	Igneous - Rhyolite
        //	Lead
        //	Micro fossils
        //	Mine Hazards
        //	Sedimentary - Conglomerate
        //	Sedimentary - Hornfels
        //	Sedimentary - Limestone
        //	Sedimentary - Marble
        //	Sedimentary - Sandstones
        //	Silver
        //	Stromatolites
        //	Summers - very hot
        //	Telescope Peak - Highest
        //	Trace Fossils
        //	Tungsten
        //	Ubehebe Crater
        //	Winters -  mild
        //	Zinc

        Place::where('name', 'Death Valley')->first()->types()->attach([
            Type::where('name', 'Acritarchs')->first()->id,
            Type::where('name', 'Algal Fossils')->first()->id,
            Type::where('name', 'Amargosa')->first()->id,
            Type::where('name', 'Antimony')->first()->id,
            Type::where('name', 'Black')->first()->id,
            Type::where('name', 'Copper')->first()->id,
            Type::where('name', 'Dangerous Animals')->first()->id,
            Type::where('name', 'Forming As The North American Tectonic Plate Is Ripping Apart In The Basin And Range Province.')->first()->id,
            Type::where('name', 'Funeral')->first()->id,
            Type::where('name', 'Gold')->first()->id,
            Type::where('name', 'Grapevine')->first()->id,
            Type::where('name', 'Igneous - Andesite')->first()->id,
            Type::where('name', 'Igneous - Basalt')->first()->id,
            Type::where('name', 'Igneous - Dacite')->first()->id,
            Type::where('name', 'Igneous - Rhyolite')->first()->id,
            Type::where('name', 'Lead')->first()->id,
            Type::where('name', 'Micro fossils')->first()->id,
            Type::where('name', 'Mine Hazards')->first()->id,
            Type::where('name', 'Sedimentary - Conglomerate')->first()->id,
            Type::where('name', 'Sedimentary - Hornfels')->first()->id,
            Type::where('name', 'Sedimentary - Limestone')->first()->id,
            Type::where('name', 'Sedimentary - Marble')->first()->id,
            Type::where('name', 'Sedimentary - Sandstones')->first()->id,
            Type::where('name', 'Silver')->first()->id,
            Type::where('name', 'Stromatolites')->first()->id,
            Type::where('name', 'Summers - very hot')->first()->id,
            Type::where('name', 'Telescope Peak - Highest')->first()->id,
            Type::where('name', 'Trace Fossils')->first()->id,
            Type::where('name', 'Tungsten')->first()->id,
            Type::where('name', 'Ubehebe Crater')->first()->id,
            Type::where('name', 'Winters -  mild')->first()->id,
            Type::where('name', 'Zinc')->first()->id,
        ]);
        //Glacier
        //  Altyn
        //	Birch
        //	Blackfoot Glacier
        //	Debris Flow
        //	Glacial hazards
        //	Grinnell Glacier
        //	Helena
        //	Ice avalanche
        //	Jackson Glacier
        //	Kintla Kinnerly
        //	Marias Rivers
        //	McDonald Creek
        //	Mississippi
        //	Missouri
        //	Mount Carter
        //	Mount Cleveland  - Highest
        //	Mount Stimson
        //	Piegan Glacier
        //	Salamander Glacier
        //	Sedimentary - Limestone
        //	Sedimentary - Sandstones
        //	Sedimentary - Shale
        //	Shepard
        //	Sits On The Boundary Between Two Of The Earth'S Major Crustal
        //	Sperry Glacier
        //	Stromatolite Fossils
        //	Summers - unpredictable
        //	Winters -  cloudy, snowy

        Place::where('name', 'Glacier')->first()->types()->attach([
            Type::where('name', 'Altyn')->first()->id,
            Type::where('name', 'Birch')->first()->id,
            Type::where('name', 'Blackfoot Glacier')->first()->id,
            Type::where('name', 'Debris Flow')->first()->id,
            Type::where('name', 'Glacial hazards')->first()->id,
            Type::where('name', 'Grinnell Glacier')->first()->id,
            Type::where('name', 'Helena')->first()->id,
            Type::where('name', 'Ice avalanche')->first()->id,
            Type::where('name', 'Jackson Glacier')->first()->id,
            Type::where('name', 'Kintla Kinnerly')->first()->id,
            Type::where('name', 'Marias Rivers')->first()->id,
            Type::where('name', 'McDonald Creek')->first()->id,
            Type::where('name', 'Mississippi')->first()->id,
            Type::where('name', 'Missouri')->first()->id,
            Type::where('name', 'Mount Carter')->first()->id,
            Type::where('name', 'Mount Cleveland  - Highest')->first()->id,
            Type::where('name', 'Mount Stimson')->first()->id,
            Type::where('name', 'Piegan Glacier')->first()->id,
            Type::where('name', 'Salamander Glacier')->first()->id,
            Type::where('name', 'Sedimentary - Limestone')->first()->id,
            Type::where('name', 'Sedimentary - Sandstones')->first()->id,
            Type::where('name', 'Sedimentary - Shale')->first()->id,
            Type::where('name', 'Shepard')->first()->id,
            Type::where('name', 'Sits On The Boundary Between Two Of The Earth\'S Major Crustal')->first()->id,
            Type::where('name', 'Sperry Glacier')->first()->id,
            Type::where('name', 'Stromatolite Fossils')->first()->id,
            Type::where('name', 'Summers - unpredictable')->first()->id,
            Type::where('name', 'Winters -  cloudy, snowy')->first()->id,
        ]);

        //Grand Canyon
        //  Ancient Fossils
        //	Colorado River
        //	Copper
        //	Flash Floods
        //	Havasu creeks
        //	Igneous - Granite
        //	Kanab
        //	Kendrick
        //	Lindbergh Hill - Highest
        //	Marine Fossils
        //	Metamorphic - Schist
        //	Micro Fossils
        //	Mount Tipton
        //	Paria River
        //	Rock Falls
        //	Saddle
        //	Sedimentary - Sandstones
        //	Silver
        //	Summers - warm, dry, and mostly clear
        //	Terrestrial Fossils
        //	The Uinkaret volcanic field
        //	Trace Fossils
        //	Uplift Of The Colorado Plateau.
        //	Uranium
        //	Winters - are freezing, snowy, and partly cloudy.

        Place::where('name', 'Grand Canyon')->first()->types()->attach([
            Type::where('name', 'Ancient Fossils')->first()->id,
            Type::where('name', 'Colorado River')->first()->id,
            Type::where('name', 'Copper')->first()->id,
            Type::where('name', 'Flash Floods')->first()->id,
            Type::where('name', 'Havasu creeks')->first()->id,
            Type::where('name', 'Igneous - Granite')->first()->id,
            Type::where('name', 'Kanab')->first()->id,
            Type::where('name', 'Kendrick')->first()->id,
            Type::where('name', 'Lindbergh Hill - Highest')->first()->id,
            Type::where('name', 'Marine Fossils')->first()->id,
            Type::where('name', 'Metamorphic - Schist')->first()->id,
            Type::where('name', 'Micro Fossils')->first()->id,
            Type::where('name', 'Mount Tipton')->first()->id,
            Type::where('name', 'Paria River')->first()->id,
            Type::where('name', 'Rock Falls')->first()->id,
            Type::where('name', 'Saddle')->first()->id,
            Type::where('name', 'Sedimentary - Sandstones')->first()->id,
            Type::where('name', 'Silver')->first()->id,
            Type::where('name', 'Summers - warm, dry, and mostly clear')->first()->id,
            Type::where('name', 'Terrestrial Fossils')->first()->id,
            Type::where('name', 'The Uinkaret volcanic field')->first()->id,
            Type::where('name', 'Trace Fossils')->first()->id,
            Type::where('name', 'Uplift Of The Colorado Plateau.')->first()->id,
            Type::where('name', 'Uranium')->first()->id,
            Type::where('name', 'Winters - are freezing, snowy, and partly cloudy.')->first()->id,
        ]);

        //Great Sand Dunes
        //  Amphibole
        //	Formed By The Right Combinations Of Wind, Water, And Sediment.
        //	High Elevation
        //	Hot Sand
        //	Igneous
        //	Lightning
        //	Mammoth Teeth Fossils
        //	Medano Creek
        //	Metamorphic - Conglomerate
        //	Orthoclase
        //	Piagioclase
        //	Pyroxene
        //	Quartz
        //	San Juan - Highest
        //	Sand Collapse
        //	Sangre De Cristo
        //	Sedimentary - Sandstones
        //	Sedimentary - Shale
        //	Summers - warm and dry
        //	Winters -  freezing and snowy, mostly clear year round

        Place::where('name', 'Great Sand Dunes')->first()->types()->attach([
            Type::where('name', 'Amphibole')->first()->id,
            Type::where('name', 'Formed By The Right Combinations Of Wind, Water, And Sediment.')->first()->id,
            Type::where('name', 'High Elevation')->first()->id,
            Type::where('name', 'Hot Sand')->first()->id,
            Type::where('name', 'Igneous')->first()->id,
            Type::where('name', 'Lightning')->first()->id,
            Type::where('name', 'Mammoth Teeth Fossils')->first()->id,
            Type::where('name', 'Medano Creek')->first()->id,
            Type::where('name', 'Metamorphic - Conglomerate')->first()->id,
            Type::where('name', 'Orthoclase')->first()->id,
            Type::where('name', 'Piagioclase')->first()->id,
            Type::where('name', 'Pyroxene')->first()->id,
            Type::where('name', 'Quartz')->first()->id,
            Type::where('name', 'San Juan - Highest')->first()->id,
            Type::where('name', 'Sand Collapse')->first()->id,
            Type::where('name', 'Sangre De Cristo')->first()->id,
            Type::where('name', 'Sedimentary - Sandstones')->first()->id,
            Type::where('name', 'Sedimentary - Shale')->first()->id,
            Type::where('name', 'Summers - warm and dry')->first()->id,
            Type::where('name', 'Winters -  freezing and snowy, mostly clear year round')->first()->id,
        ]);


        //Hawaii Volcanoes
        //  Being Shaped By Shifts Of Its Tectonic Plate, The Pacific Plate.
        //	Extinct Birds
        //	Hot Springs
        //	Human Footprints In Volcanic Ash
        //	Igneous
        //	Kīlauea
        //	Maunaloa
        //	Olivine
        //	Pyroxene
        //	Summers - comfortable, windy, and partly cloudy
        //	Trees Entombed By Lava Flow
        //	Volcanic Eruptions
        //	Winters -  comfortable, windy, and partly cloudy

        Place::where('name', 'Hawaii Volcanoes')->first()->types()->attach([
            Type::where('name', 'Being Shaped By Shifts Of Its Tectonic Plate, The Pacific Plate.')->first()->id,
            Type::where('name', 'Extinct Birds')->first()->id,
            Type::where('name', 'Hot Springs')->first()->id,
            Type::where('name', 'Human Footprints In Volcanic Ash')->first()->id,
            Type::where('name', 'Igneous')->first()->id,
            Type::where('name', 'Kīlauea')->first()->id,
            Type::where('name', 'Maunaloa')->first()->id,
            Type::where('name', 'Olivine')->first()->id,
            Type::where('name', 'Pyroxene')->first()->id,
            Type::where('name', 'Summers - comfortable, windy, and partly cloudy')->first()->id,
            Type::where('name', 'Trees Entombed By Lava Flow')->first()->id,
            Type::where('name', 'Volcanic Eruptions')->first()->id,
            Type::where('name', 'Winters -  comfortable, windy, and partly cloudy')->first()->id,
        ]);


        //Hot Springs
        //  Burned out stump holes
        //	Calcium
        //	Calcium Carbonate
        //	Found Within The Zig-Zag Mountains, Which Are Part Of The Ouachita Mountains And Eastern Oklahoma.
        //	Graptolite Fossil
        //	Hot Springs
        //	Magnesium
        //	Marine Fossils
        //	Music
        //	North
        //	Plants Fossils
        //	Potassium
        //	Sedimentary -  Novaculite
        //	Sedimentary - Chert
        //	Sedimentary - Sandstones
        //	Sedimentary - Shale
        //	Silica
        //	Sugarloaf
        //	Summers - hot and muggy
        //	Uneven terrain.
        //	Unstable rocky slopes
        //	Vertebrate Fossils
        //	West Mountain - Highest
        //	Winters - very cold and wet, and partly cloudy

        Place::where('name', 'Hot Springs')->first()->types()->attach([
            Type::where('name', 'Burned out stump holes')->first()->id,
            Type::where('name', 'Calcium')->first()->id,
            Type::where('name', 'Calcium Carbonate')->first()->id,
            Type::where('name', 'Found Within The Zig-Zag Mountains, Which Are Part Of The Ouachita Mountains And Eastern Oklahoma.')->first()->id,
            Type::where('name', 'Graptolite Fossil')->first()->id,
            Type::where('name', 'Hot Springs')->first()->id,
            Type::where('name', 'Magnesium')->first()->id,
            Type::where('name', 'Marine Fossils')->first()->id,
            Type::where('name', 'Music')->first()->id,
            Type::where('name', 'North')->first()->id,
            Type::where('name', 'Plants Fossils')->first()->id,
            Type::where('name', 'Potassium')->first()->id,
            Type::where('name', 'Sedimentary -  Novaculite')->first()->id,
            Type::where('name', 'Sedimentary - Chert')->first()->id,
            Type::where('name', 'Sedimentary - Sandstones')->first()->id,
            Type::where('name', 'Sedimentary - Shale')->first()->id,
            Type::where('name', 'Silica')->first()->id,
            Type::where('name', 'Sugarloaf')->first()->id,
            Type::where('name', 'Summers - hot and muggy')->first()->id,
            Type::where('name', 'Uneven terrain.')->first()->id,
            Type::where('name', 'Unstable rocky slopes')->first()->id,
            Type::where('name', 'Vertebrate Fossils')->first()->id,
            Type::where('name', 'West Mountain - Highest')->first()->id,
            Type::where('name', 'Winters - very cold and wet, and partly cloudy')->first()->id,
        ]);



        //Rocky Mountain
        //  Abundant Ammonites
        //	Big Thompson
        //	Bivalves
        //	Cache la Poudre
        //	Colorado
        //	Copper
        //	Debris Flow
        //	Dinosaur Fossils
        //	Flash flooding
        //	Flat-Slab Subduction
        //	Gold
        //	Igneous - Granite
        //	Jawless Fossil Fish Astraspis
        //	Lava Cliffs
        //	Lead
        //	Logs and rolling debris
        //	Marine Fossils
        //	Metamorphic - Gneiss
        //	Metamorphic - Schist
        //	Molybdenum
        //	Rock Falls
        //	Shark Teeth Fossils
        //	Silver
        //	Sugarloaf
        //	Summers - comfortable
        //	Tungsten
        //	Winters -  freezing, snowy, and windy; partly cloudy year round
        //	Zinc

        Place::where('name', 'Rocky Mountain')->first()->types()->attach([
            Type::where('name', 'Abundant Ammonites')->first()->id,
            Type::where('name', 'Big Thompson')->first()->id,
            Type::where('name', 'Bivalves')->first()->id,
            Type::where('name', 'Cache la Poudre')->first()->id,
            Type::where('name', 'Colorado')->first()->id,
            Type::where('name', 'Copper')->first()->id,
            Type::where('name', 'Debris Flow')->first()->id,
            Type::where('name', 'Dinosaur Fossils')->first()->id,
            Type::where('name', 'Flash flooding')->first()->id,
            Type::where('name', 'Flat-Slab Subduction')->first()->id,
            Type::where('name', 'Gold')->first()->id,
            Type::where('name', 'Igneous - Granite')->first()->id,
            Type::where('name', 'Jawless Fossil Fish Astraspis')->first()->id,
            Type::where('name', 'Lava Cliffs')->first()->id,
            Type::where('name', 'Lead')->first()->id,
            Type::where('name', 'Logs and rolling debris')->first()->id,
            Type::where('name', 'Marine Fossils')->first()->id,
            Type::where('name', 'Metamorphic - Gneiss')->first()->id,
            Type::where('name', 'Metamorphic - Schist')->first()->id,
            Type::where('name', 'Molybdenum')->first()->id,
            Type::where('name', 'Rock Falls')->first()->id,
            Type::where('name', 'Shark Teeth Fossils')->first()->id,
            Type::where('name', 'Silver')->first()->id,
            Type::where('name', 'Sugarloaf')->first()->id,
            Type::where('name', 'Summers - comfortable')->first()->id,
            Type::where('name', 'Tungsten')->first()->id,
            Type::where('name', 'Winters -  freezing, snowy, and windy; partly cloudy year round')->first()->id,
            Type::where('name', 'Zinc')->first()->id,
        ]);



        //Wind Cave
        //	Brachiopod Fossils
        //	Calcium Carbonate
        //	Elk
        //	Gypsum
        //	Igneous - Pegmatite
        //	Metamorphic - Schist
        //	Rock Falls
        //	Rugose Coral Fossils
        //	Summers - warm
        //	Winters -  semi-arid with mild

        Place::where('name', 'Wind Cave')->first()->types()->attach([
            Type::where('name', 'Brachiopod Fossils')->first()->id,
            Type::where('name', 'Calcium Carbonate')->first()->id,
            Type::where('name', 'Elk')->first()->id,
            Type::where('name', 'Gypsum')->first()->id,
            Type::where('name', 'Igneous - Pegmatite')->first()->id,
            Type::where('name', 'Metamorphic - Schist')->first()->id,
            Type::where('name', 'Rock Falls')->first()->id,
            Type::where('name', 'Rugose Coral Fossils')->first()->id,
            Type::where('name', 'Summers - warm')->first()->id,
            Type::where('name', 'Winters -  semi-arid with mild')->first()->id,
        ]);


        //Yellowstone
        //  Beartooth
        //	Eagle Peak - Highest
        //	Earthquakes
        //	Firehole River
        //	Gallatin
        //	Gardner River
        //	Hydrothermal Explosions
        //	Invertebrates
        //	Lamar River
        //	Lava flows
        //	Metamorphic - Gneiss
        //	Mount Sheridan
        //	Mount Washburn
        //	Plants
        //	Potassium
        //	Quartz
        //	Sedimentary - Sandstones
        //	Snake River
        //	Summers - short, comfortable, dry, mostly clear.
        //	Tectonic Hotspot.
        //	Trace Fossils
        //	Vertebrates
        //	Winters - freezing, snowy, and partly cloudy.
        //	Yellowstone Caldera
        //	Yellowstone River


        Place::where('name', 'Yellowstone')->first()->types()->attach([
            Type::where('name', 'Beartooth')->first()->id,
            Type::where('name', 'Eagle Peak - Highest')->first()->id,
            Type::where('name', 'Earthquakes')->first()->id,
            Type::where('name', 'Firehole River')->first()->id,
            Type::where('name', 'Gallatin')->first()->id,
            Type::where('name', 'Gardner River')->first()->id,
            Type::where('name', 'Hydrothermal Explosions')->first()->id,
            Type::where('name', 'Invertebrates')->first()->id,
            Type::where('name', 'Lamar River')->first()->id,
            Type::where('name', 'Lava flows')->first()->id,
            Type::where('name', 'Metamorphic - Gneiss')->first()->id,
            Type::where('name', 'Mount Sheridan')->first()->id,
            Type::where('name', 'Mount Washburn')->first()->id,
            Type::where('name', 'Plants')->first()->id,
            Type::where('name', 'Potassium')->first()->id,
            Type::where('name', 'Quartz')->first()->id,
            Type::where('name', 'Sedimentary - Sandstones')->first()->id,
            Type::where('name', 'Snake River')->first()->id,
            Type::where('name', 'Summers - short, comfortable, dry, mostly clear.')->first()->id,
            Type::where('name', 'Tectonic Hotspot.')->first()->id,
            Type::where('name', 'Trace Fossils')->first()->id,
            Type::where('name', 'Vertebrates')->first()->id,
            Type::where('name', 'Winters - freezing, snowy, and partly cloudy.')->first()->id,
            Type::where('name', 'Yellowstone Caldera')->first()->id,
            Type::where('name', 'Yellowstone River')->first()->id,
        ]);
    }
}
