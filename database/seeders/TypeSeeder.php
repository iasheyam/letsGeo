<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Abundant Ammonites	http://geology.teacherfriendlyguide.org/index.php/fossils-intro-nc/fossils-region3-nc#:~:text=In%20addition%2C%20a%20variety%20of,%2C%20leaves%2C%20and%20freshwater%20clams.
        //Acritarchs	http://npshistory.com/publications/deva/grdtr-99-01.pdf
        //Algal Fossils	http://npshistory.com/publications/deva/grdtr-99-01.pdf
        //Altyn	https://www.nps.gov/glac/learn/nature/geologicformations.htm
        //Alumina	http://larryeifert.com/craterlakefoundation.org/library/nature-notes/vol17-rocks-crater-lake.htm#:~:text=Most%20of%20the%20rock%20in,in%20color%2C%20sometimes%20almost%20black.
        //Amargosa	https://www.blm.gov/programs/national-conservation-lands/california/amargosa-wsr
        //Amphibole	http://npshistory.com/brochures/grsa/geology1.pdf
        //Ancient Fossils	https://www.nps.gov/grca/learn/nature/fossils.htm#:~:text=The%20sedimentary%20rocks%20exposed%20throughout,scorpions%2C%20centipedes%2C%20and%20reptiles.
        //Antimony	https://www.nps.gov/deva/learn/nature/mining-in-death-valley.htm#:~:text=Prospectors%20including%20Shorty%20Harris%20and,supported%20them%20became%20ghost%20towns.
        //Beartooth	https://www.yellowstoneparknet.com/mountains/
        //Being Shaped By Shifts Of Its Tectonic Plate, The Pacific Plate.	https://education.nationalgeographic.org/resource/chain-islands-hawaiian-hot-spot
        //Big Thompson	https://www.nps.gov/romo/rushing_streams_roaring_waterfalls.htm#:~:text=The%20headwaters%20of%20major%20rivers,raging%20streams%20and%20thundering%20waterfalls!


        $types = [
            [
                'name' => 'Abundant Ammonites',
                'source' => 'http://geology.teacherfriendlyguide.org/index.php/fossils-intro-nc/fossils-region3-nc#:~:text=In%20addition%2C%20a%20variety%20of,%2C%20leaves%2C%20and%20freshwater%20clams'
            ],
            [
                'name' => 'Acritarchs',
                'source' => 'http://npshistory.com/publications/deva/grdtr-99-01.pdf'
            ],
            [
                'name' => 'Algal Fossils',
                'source' => 'http://npshistory.com/publications/deva/grdtr-99-01.pdf'
            ],
            [
                'name' => 'Altyn',
                'source' => 'https://www.nps.gov/glac/learn/nature/geologicformations.htm'
            ],
            [
                'name' => 'Alumina',
                'source' => 'http://larryeifert.com/craterlakefoundation.org/library/nature-notes/vol17-rocks-crater-lake.htm#:~:text=Most%20of%20the%20rock%20in,in%20color%2C%20sometimes%20almost%20black'
            ],
            [
                'name' => 'Amargosa',
                'source' => 'https://www.blm.gov/programs/national-conservation-lands/california/amargosa-wsr'
            ],
            [
                'name' => 'Amphibole',
                'source' => 'http://npshistory.com/brochures/grsa/geology1.pdf'
            ],
            [
                'name' => 'Ancient Fossils',
                'source' => 'https://www.nps.gov/grca/learn/nature/fossils.htm#:~:text=The%20sedimentary%20rocks%20exposed%20throughout,scorpions%2C%20centipedes%2C%20and%20reptiles'
            ],
            [
                'name' => 'Antimony',
                'source' => 'https://www.nps.gov/deva/learn/nature/mining-in-death-valley.htm#:~:text=Prospectors%20including%20Shorty%20Harris%20and,supported%20them%20became%20ghost%20towns'
            ],
            [
                'name' => 'Beartooth',
                'source' => 'https://www.yellowstoneparknet.com/mountains/'
            ],
            [
                'name' => 'Being Shaped By Shifts Of Its Tectonic Plate, The Pacific Plate.',
                'source' => 'https://education.nationalgeographic.org/resource/chain-islands-hawaiian-hot-spot'
            ],
            [
                'name' => 'Big Thompson',
                'source' => 'https://www.nps.gov/romo/rushing_streams_roaring_waterfalls.htm#:~:text=The%20headwaters%20of%20major%20rivers,raging%20streams%20and%20thundering%20waterfalls!'
            ],
            [
                'name' => 'Biotite',
                'source' => 'https://www.nps.gov/romo/rushing_streams_roaring_waterfalls.htm#:~:text=The%20headwaters%20of%20major%20rivers,raging%20streams%20and%20thundering%20waterfalls!'
            ],

            //Birch	https://www.nps.gov/glac/learn/education/continental_divide.htm
            //Bivalves	http://geology.teacherfriendlyguide.org/index.php/fossils-intro-nc/fossils-region3-nc#:~:text=In%20addition%2C%20a%20variety%20of,%2C%20leaves%2C%20and%20freshwater%20clams.
            //Black	https://www.britannica.com/place/Death-Valley
            //Blackfoot Glacier 	https://www.doi.gov/blog/9-things-you-didnt-know-about-glacier-national-park#:~:text=Of%20the%2026%20glaciers%20present,largest%20glacier%20in%20the%20park.
            //Brachiopod Fossils	https://www.nps.gov/wica/learn/nature/paleontology.htm#:~:text=You%20can%20experience%20small%20windows,of%20Wind%20Cave's%20tour%20routes.
            //Burned out stump holes	https://www.nps.gov/hosp/planyourvisit/safety.htm
            //Cache la Poudre	https://www.nps.gov/romo/rushing_streams_roaring_waterfalls.htm#:~:text=The%20headwaters%20of%20major%20rivers,raging%20streams%20and%20thundering%20waterfalls!
            //Calcium	https://www.nps.gov/hosp/learn/nature/hotsprings.htm
            //Calcium Carbonate	https://www.nps.gov/hosp/learn/nature/hotsprings.htm
            //Colorado	https://www.nps.gov/romo/rushing_streams_roaring_waterfalls.htm#:~:text=The%20headwaters%20of%20major%20rivers,raging%20streams%20and%20thundering%20waterfalls!
            //Colorado River	https://www.nps.gov/grca/learn/nature/rivers.htm
            //Copper	https://explorethecanyon.com/geology-of-the-grand-canyon/
            //Crater lakes	https://www.nps.gov/articles/000/crater-lakes.htm
            [
                'name' => 'Birch',
                'source' => 'https://www.nps.gov/glac/learn/education/continental_divide.htm',
            ],
            [
                'name' => 'Bivalves',
                'source' => 'http://geology.teacherfriendlyguide.org/index.php/fossils-intro-nc/fossils-region3-nc#:~:text=In%20addition%2C%20a%20variety%20of,%2C%20leaves%2C%20and%20freshwater%20clams.'
            ],
            [
                'name' => 'Black',
                'source' => 'https://www.britannica.com/place/Death-Valley'
            ],
            [
                'name' => 'Blackfoot Glacier',
                'source' => 'https://www.doi.gov/blog/9-things-you-didnt-know-about-glacier-national-park#:~:text=Of%20the%2026%20glaciers%20present,largest%20glacier%20in%20the%20park.'
            ],
            [
                'name' => 'Brachiopod Fossils',
                'source' => 'https://www.nps.gov/wica/learn/nature/paleontology.htm#:~:text=You%20can%20experience%20small%20windows,of%20Wind%20Cave%27s%20tour%20routes.'
            ],
            [
                'name' => 'Burned out stump holes',
                'source' => 'https://www.nps.gov/hosp/planyourvisit/safety.htm'
            ],
            [
                'name' => 'Cache la Poudre',
                'source' => 'https://www.nps.gov/romo/rushing_streams_roaring_waterfalls.htm#:~:text=The%20headwaters%20of%20major%20rivers,raging%20streams%20and%20thundering%20waterfalls!'
            ],
            [
                'name' => 'Calcium',
                'source' => 'https://www.nps.gov/hosp/learn/nature/hotsprings.htm'
            ],
            [
                'name' => 'Calcium Carbonate',
                'source' => 'https://www.nps.gov/hosp/learn/nature/hotsprings.htm'
            ],
            [
                'name' => 'Colorado',
                'source' => 'https://www.nps.gov/romo/rushing_streams_roaring_waterfalls'
            ],
            [
                'name' => 'Colorado River',
                'source' => 'https://www.nps.gov/grca/learn/nature/rivers.htm'
            ],
            [
                'name' => 'Copper',
                'source' => 'https://explorethecanyon.com/geology-of-the-grand-canyon/'
            ],
            [
                'name' => 'Crater lakes',
                'source' => 'https://www.nps.gov/articles/000/crater-lakes.htm'
            ],

            //Dangerous Animals	https://www.nps.gov/deva/planyourvisit/safety.htm#:~:text=Rattlesnakes%2C%20scorpions%2C%20or%20black%20widow,mice%20and%20cactus%20mice%20here.
            //Debris Flow	https://www.tandfonline.com/doi/abs/10.1080/02723646.1989.10642367?journalCode=tphy22
            //Dinosaur Fossils	http://geology.teacherfriendlyguide.org/index.php/fossils-intro-nc/fossils-region3-nc#:~:text=In%20addition%2C%20a%20variety%20of,%2C%20leaves%2C%20and%20freshwater%20clams.
            //Eagle Peak - Highest	https://www.yellowstone.org/park-peaks-the-creation-and-significance-of-yellowstones-mountain-tops/
            //Earthquakes	https://www.usgs.gov/observatories/yvo/news/real-hazards-yellowstone
            //Elk
            //Extinct Birds	https://www.nps.gov/havo/learn/news/20150915_pr_programs.htm#:~:text=Fossil%20History%20of%20Hawai'i.&text=Although%20Hawai'i%20didn't,trees%20entombed%20by%20lava%20flows.
            //Ferro- Magnesian	http://larryeifert.com/craterlakefoundation.org/library/nature-notes/vol17-rocks-crater-lake.htm#:~:text=Most%20of%20the%20rock%20in,in%20color%2C%20sometimes%20almost%20black.
            //Firehole River	https://www.nps.gov/yell/learn/nature/water.htm
            //Flash flooding	https://www.nps.gov/romo/planyourvisit/safety.htm
            //Flash Floods	https://www.nps.gov/grca/planyourvisit/weather-dangers.htm
            [
                'name' => 'Dangerous Animals',
                'source' => 'https://www.nps.gov/deva/planyourvisit/safety.htm#:~:text=Rattlesnakes%2C%20scorpions%2C%20or%20black%20widow,mice%20and%20cactus%20mice%20here.'
            ],
            [
                'name' => 'Debris Flow',
                'source' => 'https://www.tandfonline.com/doi/abs/10.1080/02723646.1989.10642367?journalCode=tphy22'
            ],
            [
                'name' => 'Dinosaur Fossils',
                'source' => 'http://geology.teacherfriendlyguide.org/index.php/fossils-intro-nc/fossils-region3-nc#:~:text=In%20addition%2C%20a%20variety%20of,%2C%20leaves%2C%20and%20freshwater%20clams.'
            ],
            [
                'name' => 'Eagle Peak - Highest',
                'source' => 'https://www.yellowstone.org/park-peaks-the-creation-and-significance-of-yellowstones-mountain-tops/'
            ],
            [
                'name' => 'Earthquakes',
                'source' => 'https://www.usgs.gov/observatories/yvo/news/real-hazards-yellowstone'
            ],
            [
                'name' => 'Elk',
                'source' => 'https://www.nps.gov/articles/000/elk.htm'
            ],
            [
                'name' => 'Extinct Birds',
                'source' => 'https://www.nps.gov/havo/learn/news/20150915_pr_programs.htm'
            ],
            [
                'name' => 'Ferro- Magnesian',
                'source' => 'http://larryeifert.com/craterlakefoundation.org/library/nature-notes/vol17-rocks-crater-lake.htm#:~:text=Most%20of%20the%20rock%20in,in%20'
            ],
            [
                'name' => 'Firehole River',
                'source' => 'https://www.nps.gov/yell/learn/nature/water.htm'
            ],
            [
                'name' => 'Flash flooding',
                'source' => 'https://www.nps.gov/romo/planyourvisit/safety.htm'
            ],
            [
                'name' => 'Flash Floods',
                'source' => 'https://www.nps.gov/grca/planyourvisit/weather-dangers.htm'
            ],
            //Flat-Slab Subduction	https://www.nationalgeographic.com/culture/article/110302-rocky-mountains-colorado-mystery-new-theory-earth-science
            //Formed By The Right Combinations Of Wind, Water, And Sediment. 	https://www.nps.gov/grsa/learn/nature/sanddunes.htm
            //Forming As The North American Tectonic Plate Is Ripping Apart In The Basin And Range Province.	https://www.nps.gov/subjects/geology/plate-tectonics.htm
            //Found Within The Zig-Zag Mountains, Which Are Part Of The Ouachita Mountains And Eastern Oklahoma. 	https://www.usgs.gov/geology-and-ecology-of-national-parks/geology-hot-springs-national-park
            //Funeral	https://www.britannica.com/place/Death-Valley
            //Gallatin	https://www.yellowstoneparknet.com/mountains/
            //Gardner River	https://www.nps.gov/yell/learn/nature/water.htm
            //Glacial hazards	https://www.tandfonline.com/doi/abs/10.1080/02723646.1989.10642367?journalCode=tphy20
            //Gold	https://www.sabinocanyon.com/what-minerals-are-found-in-the-rocky-mountains/
            [
                'name' => 'Flat-Slab Subduction',
                'source' => 'https://www.nationalgeographic.com/culture/article/110302-rocky-mountains-colorado-mystery-new-theory-earth-science'
            ],
            [
                'name' => 'Formed By The Right Combinations Of Wind, Water, And Sediment.',
                'source' => 'https://www.nps.gov/grsa/learn/nature/sanddunes.htm'
            ],
            [
                'name' => 'Forming As The North American Tectonic Plate Is Ripping Apart In The Basin And Range Province.',
                'source' => 'https://www.nps.gov/subjects/geology/plate-tectonics.htm'
            ],
            [
                'name' => 'Found Within The Zig-Zag Mountains, Which Are Part Of The Ouachita Mountains And Eastern Oklahoma.',
                'source' => 'https://www.usgs.gov/geology-and-ecology-of-national-parks/geology-hot-springs-national-park'
            ],
            [
                'name' => 'Funeral',
                'source' => 'https://www.britannica.com/place/Death-Valley'
            ],
            [
                'name' => 'Gallatin',
                'source' => 'https://www.yellowstoneparknet.com/mountains/'
            ],
            [
                'name' => 'Gardner River',
                'source' => 'https://www.nps.gov/yell/learn/nature/water.htm'
            ],
            [
                'name' => 'Glacial hazards',
                'source' => 'https://www.tandfonline.com/doi/abs/10.1080/02723646.1989.10642367?journalCode=tphy20'
            ],
            [
                'name' => 'Gold',
                'source' => 'https://www.sabinocanyon.com/what-minerals-are-found-in-the-rocky-mountains/'
            ],

            //Grapevine	https://www.britannica.com/place/Death-Valley
            //Graptolite Fossil 	https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm
            //Grinnell Glacier	https://www.nps.gov/glac/learn/nature/how-to-see-a-glacier.htm
            //Gypsum	https://www.nps.gov/wica/learn/nature/wind-cave-geology.htm
            //Havasu creeks	https://www.nps.gov/grca/learn/nature/rivers.htm
            //Helena	https://www.nps.gov/glac/learn/nature/geologicformations.htm
            //High Elevation	https://www.nps.gov/grsa/planyourvisit/safety.htm
            //Hot Sand	https://www.nps.gov/grsa/planyourvisit/safety.htm
            //Hot Springs 	https://www.usgs.gov/geology-and-ecology-of-national-parks/hot-springs-national-park
            //Human Footprints In Volcanic Ash	https://www.nps.gov/havo/learn/news/20150915_pr_programs.htm#:~:text=Fossil%20History%20of%20Hawai'i.&text=Although%20Hawai'i%20didn't,trees%20entombed%20by%20lava%20flows.
            //Hydrothermal Explosions	https://www.usgs.gov/observatories/yvo/news/real-hazards-yellowstone
            //Ice avalanche	https://www.tandfonline.com/doi/abs/10.1080/02723646.1989.10642367?journalCode=tphy21
            [
                'name' => 'Grapevine',
                'source' => 'https://www.britannica.com/place/Death-Valley'
            ],
            [
                'name' => 'Graptolite Fossil',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],
            [
                'name' => 'Grinnell Glacier',
                'source' => 'https://www.nps.gov/glac/learn/nature/how-to-see-a-glacier.htm'
            ],
            [
                'name' => 'Gypsum',
                'source' => 'https://www.nps.gov/wica/learn/nature/wind-cave-geology.htm'
            ],
            [
                'name' => 'Havasu creeks',
                'source' => 'https://www.nps.gov/grca/learn/nature/rivers.htm'
            ],
            [
                'name' => 'Helena',
                'source' => 'https://www.nps.gov/glac/learn/nature/geologicformations.htm'
            ],
            [
                'name' => 'High Elevation',
                'source' => 'https://www.nps.gov/grsa/planyourvisit/safety.htm'
            ],
            [
                'name' => 'Hot Sand',
                'source' => 'https://www.nps.gov/grsa/planyourvisit/safety.htm'
            ],
            [
                'name' => 'Hot Springs',
                'source' => 'https://www.usgs.gov/geology-and-ecology-of-national-parks/hot-springs-national-park'
            ],
            [
                'name' => 'Human Footprints In Volcanic Ash',
                'source' => 'https://www.nps.gov/havo/learn/news/20150915_pr_programs.htm#:~:text=Fossil%20History%20of%20Hawai%27i.&text=Although%20Hawai%27i%20didn%27t,trees%20entombed%20by%20lava%20flows.'
            ],
            [
                'name' => 'Hydrothermal Explosions',
                'source' => 'https://www.usgs.gov/observatories/yvo/news/real-hazards-yellowstone'
            ],
            [
                'name' => 'Ice avalanche',
                'source' => 'https://www.tandfonline.com/doi/abs/10.1080/02723646.1989.10642367?journalCode=tphy21',
            ],

            //Igneous
            //Igneous - Andesite
            //Igneous - Basalt
            //Igneous - Basaltic Andesite
            //Igneous - Dacite
            //Igneous - Granite
            //Igneous - Pegmatite
            //Igneous - Rhyodacite
            //Igneous - Rhyolite

            [
                'name' => 'Igneous',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],
            [
                'name' => 'Igneous - Andesite',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],
            [
                'name' => 'Igneous - Basalt',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],
            [
                'name' => 'Igneous - Basaltic Andesite',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],
            [
                'name' => 'Igneous - Dacite',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],
            [
                'name' => 'Igneous - Granite',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],
            [
                'name' => 'Igneous - Pegmatite',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],
            [
                'name' => 'Igneous - Rhyodacite',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],
            [
                'name' => 'Igneous - Rhyolite',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],

            //Interaction Between Tectonic Plates And The Resulting Chain Of Volcanoes.	https://www.usgs.gov/geology-and-ecology-of-national-parks/geology-crater-lake-national-park
            //Invertebrates	https://www.nps.gov/yell/learn/nature/fossils.htm#:~:text=They%20include%20corals%2C%20bryozoans%2C%20brachiopods,in%20some%20petrified%20tree%20bark.
            //Jackson Glacier	https://www.nps.gov/glac/learn/nature/how-to-see-a-glacier.htm
            //Jawless Fossil Fish Astraspis	http://geology.teacherfriendlyguide.org/index.php/fossils-intro-nc/fossils-region3-nc#:~:text=In%20addition%2C%20a%20variety%20of,%2C%20leaves%2C%20and%20freshwater%20clams.
            //Kanab	https://www.nps.gov/grca/learn/nature/rivers.htm
            //Kendrick	https://peakvisor.com/park/grand-canyon-national-park.html
            //Kīlauea	https://www.gohawaii.com/islands/hawaii-big-island/regions/kau/volcanoes-national-park

            [
                'name' => 'Interaction Between Tectonic Plates And The Resulting Chain Of Volcanoes.',
                'source' => 'https://www.usgs.gov/geology-and-ecology-of-national-parks/geology-crater-lake-national-park'
            ],
            [
                'name' => 'Invertebrates',
                'source' => 'https://www.nps.gov/yell/learn/nature/fossils.htm#:~:text=They%20include%20corals%2C%20bryozoans%2C%20brachiopods,in%20some%20petrified%20tree%20bark.'
            ],
            [
                'name' => 'Jackson Glacier',
                'source' => 'https://www.nps.gov/glac/learn/nature/how-to-see-a-glacier.htm'
            ],
            [
                'name' => 'Jawless Fossil Fish Astraspis',
                'source' => 'http://geology.teacherfriendlyguide.org/index.php/fossils-intro-nc/fossils-region3-nc#:~:text=In%20addition%2C%20a%20variety%20of,%2C%20leaves%2C%20and%20freshwater%20clams.'
            ],
            [
                'name' => 'Kanab',
                'source' => 'https://www.nps.gov/grca/learn/nature/rivers.htm'
            ],
            [
                'name' => 'Kendrick',
                'source' => 'https://peakvisor.com/park/grand-canyon-national-park.html'
            ],
            [
                'name' => 'Kīlauea',
                'source' => 'https://www.gohawaii.com/islands/hawaii-big-island/regions/kau/volcanoes-national-park'
            ],

            //Kintla Kinnerly	https://peakvisor.com/range/livingston-range.html
            //Lamar River	https://www.nps.gov/yell/learn/nature/water.htm
            //Landslides	https://www.usgs.gov/volcanoes/crater-lake/landslide-and-rockfall-hazards-crater-lake#:~:text=Landslides%20or%20rock%20falls%20could,Lake%20and%20impact%20its%20shore.
            //Lava Cliffs	https://www.nps.gov/places/romo_lavacliffs.htm
            //Lava flows	https://www.usgs.gov/observatories/yvo/news/real-hazards-yellowstone
            //Lead	https://www.sabinocanyon.com/what-minerals-are-found-in-the-rocky-mountains/
            //Lightning	https://www.nps.gov/grsa/planyourvisit/safety.htm

            [
                'name' => 'Kintla Kinnerly',
                'source' => 'https://peakvisor.com/range/livingston-range.html'
            ],
            [
                'name' => 'Lamar River',
                'source' => 'https://www.nps.gov/yell/learn/nature/water.htm'
            ],
            [
                'name' => 'Landslides',
                'source' => 'https://www.usgs.gov/volcanoes/crater-lake/landslide-and-rockfall-hazards-crater-lake#:~:text=Landslides%20or%20rock%20falls%20could,Lake%20and%20impact%20its%20shore.'
            ],
            [
                'name' => 'Lava Cliffs',
                'source' => 'https://www.nps.gov/places/romo_lavacliffs.htm'
            ],
            [
                'name' => 'Lava flows',
                'source' => 'https://www.usgs.gov/observatories/yvo/news/real-hazards-yellowstone'
            ],
            [
                'name' => 'Lead',
                'source' => 'https://www.sabinocanyon.com/what-minerals-are-found-in-the-rocky-mountains/'
            ],
            [
                'name' => 'Lightning',
                'source' => 'https://www.nps.gov/grsa/planyourvisit/safety.htm'
            ],

            // Lindbergh Hill - Highest	https://peakvisor.com/park/grand-canyon-national-park.html
            //Logs and rolling debris	https://www.nps.gov/romo/planyourvisit/safety.htm
            //Magnesium	https://www.nps.gov/hosp/learn/nature/hotsprings.htm
            //Mammoth Teeth Fossils	https://www.doi.gov/blog/12-things-you-didnt-know-about-great-sand-dunes-national-park-and-preserve
            //Marias Rivers	https://www.nps.gov/glac/learn/education/continental_divide.htm
            //Marine Fossils	https://www.nps.gov/grca/learn/nature/fossils.htm#:~:text=The%20sedimentary%20rocks%20exposed%20throughout,scorpions%2C%20centipedes%2C%20and%20reptiles.
            //Maunaloa	https://www.gohawaii.com/islands/hawaii-big-island/regions/kau/volcanoes-national-park
            //McDonald Creek	https://www.fcvb.org/glacier-national-park.php#:~:text=There%20are%20563%20streams%20or,Creek%2C%20which%20stretches%2025.8%20miles.
            //Medano Creek	https://www.nps.gov/grsa/planyourvisit/medano-creek.htm
            [
                'name' => 'Lindbergh Hill - Highest',
                'source' => 'https://peakvisor.com/park/grand-canyon-national-park.html'
            ],
            [
                'name' => 'Logs and rolling debris',
                'source' => 'https://www.nps.gov/romo/planyourvisit/safety.htm'
            ],
            [
                'name' => 'Magnesium',
                'source' => 'https://www.nps.gov/hosp/learn/nature/hotsprings.htm'
            ],
            [
                'name' => 'Mammoth Teeth Fossils',
                'source' => 'https://www.doi.gov/blog/12-things-you-didnt-know-about-great-sand-dunes-national-park-and-preserve'
            ],
            [
                'name' => 'Marias Rivers',
                'source' => 'https://www.nps.gov/glac/learn/education/continental_divide.htm'
            ],
            [
                'name' => 'Marine Fossils',
                'source' => 'https://www.nps.gov/grca/learn/nature/fossils.htm#:~:text=The%20sedimentary%20rocks%20exposed%20throughout,scorpions%2C%20centipedes%2C%20and%20reptiles.'
            ],
            [
                'name' => 'Maunaloa',
                'source' => 'https://www.gohawaii.com/islands/hawaii-big-island/regions/kau/volcanoes-national-park'
            ],
            [
                'name' => 'McDonald Creek',
                'source' => 'https://www.fcvb.org/glacier-national-park.php#:~:text=There%20are%20563%20streams%20or,Creek%2C%20which%20stretches%2025.8%20miles.'
            ],
            [
                'name' => 'Medano Creek',
                'source' => 'https://www.nps.gov/grsa/planyourvisit/medano-creek.htm'
            ],
            //Metamorphic - Conglomerate
            //Metamorphic - Gneiss
            //Metamorphic - Schist
            //Micro fossils	https://www.nps.gov/grca/learn/nature/fossils.htm#:~:text=The%20sedimentary%20rocks%20exposed%20throughout,scorpions%2C%20centipedes%2C%20and%20reptiles.
            //Mine Hazards	https://www.nps.gov/deva/planyourvisit/safety.htm#:~:text=Rattlesnakes%2C%20scorpions%2C%20or%20black%20widow,mice%20and%20cactus%20mice%20here.
            //Mississippi	https://www.nps.gov/glac/learn/education/continental_divide.htm
            //Missouri	https://www.nps.gov/glac/learn/education/continental_divide.htm
            //Molybdenum	https://www.sabinocanyon.com/what-minerals-are-found-in-the-rocky-mountains/
            [
                'name' => 'Metamorphic - Conglomerate',
                'source' => 'https://www.nps.gov/glac/learn/education/continental_divide.htm'
            ],
            [
                'name' => 'Metamorphic - Gneiss',
                'source' => 'https://www.nps.gov/glac/learn/education/continental_divide.htm'
            ],
            [
                'name' => 'Metamorphic - Schist',
                'source' => 'https://www.nps.gov/glac/learn/education/continental_divide.htm'
            ],
            [
                'name' => 'Micro Fossils',
                'source' => 'https://www.nps.gov/grca/learn/nature/fossils.htm#:~:text=The%20sedimentary%20rocks%20exposed%20throughout,scorpions%2C%20centipedes%2C%20and%20reptiles.'
            ],
            [
                'name' => 'Mine Hazards',
                'source' => 'https://www.nps.gov/deva/planyourvisit/safety.htm#:~:text=Rattlesnakes%2C%20scorpions%2C%20or%20black%20widow,mice%20and%20cactus%20mice%20here.'
            ],
            [
                'name' => 'Mississippi',
                'source' => 'https://www.nps.gov/glac/learn/education/continental_divide.htm'
            ],
            [
                'name' => 'Missouri',
                'source' => 'https://www.nps.gov/glac/learn/education/continental_divide.htm'
            ],
            [
                'name' => 'Molybdenum',
                'source' => 'https://www.sabinocanyon.com/what-minerals-are-found-in-the-rocky-mountains/'
            ],
            //Mount Carter	https://peakvisor.com/range/livingston-range.html
            //Mount Cleveland  - Highest	https://www.nps.gov/glac/learn/nature/mountains.htm
            //Mount Sheridan	https://www.yellowstoneparknet.com/mountains/
            //Mount Stimson	https://smokybear.com/highest-mountain-peaks-in-glacier-national-park-montana/
            //Mount Tipton	https://peakvisor.com/park/grand-canyon-national-park.html
            [
                'name' => 'Mount Carter',
                'source' => 'https://peakvisor.com/range/livingston-range.html'
            ],
            [
                'name' => 'Mount Cleveland  - Highest',
                'source' => 'https://www.nps.gov/glac/learn/nature/mountains.htm'
            ],
            [
                'name' => 'Mount Sheridan',
                'source' => 'https://www.yellowstoneparknet.com/mountains/'
            ],
            [
                'name' => 'Mount Stimson',
                'source' => 'https://smokybear.com/highest-mountain-peaks-in-glacier-national-park-montana/'
            ],
            [
                'name' => 'Mount Tipton',
                'source' => 'https://peakvisor.com/park/grand-canyon-national-park.html'
            ],

            //Mount Washburn	https://www.yellowstoneparknet.com/mountains/
            //Music	https://peakvisor.com/park/hot-springs-national-park.html
            //North	https://peakvisor.com/park/hot-springs-national-park.html
            //Olivine	https://www.nps.gov/hale/learn/nature/rock-identification.htm#:~:text=Basalt%2C%20the%20type%20of%20rock,olivine%20and%20pyroxene%20mineral%20groups.
            [
                'name' => 'Mount Washburn',
                'source' => 'https://www.yellowstoneparknet.com/mountains/'
            ],
            [
                'name' => 'Music',
                'source' => 'https://peakvisor.com/park/hot-springs-national-park.html'
            ],
            [
                'name' => 'North',
                'source' => 'https://peakvisor.com/park/hot-springs-national-park.html'
            ],
            [
                'name' => 'Olivine',
                'source' => 'https://www.nps.gov/hale/learn/nature/rock-identification.htm#:~:text=Basalt%2C%20the%20type%20of%20rock,olivine%20and%20pyroxene%20mineral%20groups.'
            ],
            //Orthoclase	http://npshistory.com/brochures/grsa/geology1.pdf
            //Paria River	https://www.nps.gov/grca/learn/nature/rivers.htm
            //Piagioclase	http://npshistory.com/brochures/grsa/geology1.pdf
            //Piegan Glacier	https://www.nps.gov/glac/learn/nature/how-to-see-a-glacier.htm
            //Plants	https://www.nps.gov/yell/learn/nature/fossils.htm#:~:text=They%20include%20corals%2C%20bryozoans%2C%20brachiopods,in%20some%20petrified%20tree%20bark.
            [
                'name' => 'Orthoclase',
                'source' => 'http://npshistory.com/brochures/grsa/geology1.pdf'
            ],
            [
                'name' => 'Paria River',
                'source' => 'https://www.nps.gov/grca/learn/nature/rivers.htm'
            ],
            [
                'name' => 'Piagioclase',
                'source' => 'http://npshistory.com/brochures/grsa/geology1.pdf'
            ],
            [
                'name' => 'Piegan Glacier',
                'source' => 'https://www.nps.gov/glac/learn/nature/how-to-see-a-glacier.htm'
            ],
            [
                'name' => 'Plants',
                'source' => 'https://www.nps.gov/yell/learn/nature/fossils.htm#:~:text=They%20include%20corals%2C%20bryozoans%2C%20brachiopods,in%20some%20petrified%20tree%20bark.'
            ],
            //Plants Fossils	https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm
            //Potassium	https://www.nps.gov/yell/learn/nature/influence-of-geology.htm#:~:text=The%20volcanic%20rhyolites%20and%20tuffs,which%20form%20nutrient%2Dpoor%20soils.
            //Pyroxene	http://npshistory.com/brochures/grsa/geology1.pdf
            //Quartz	https://www.nps.gov/yell/learn/nature/influence-of-geology.htm#:~:text=The%20volcanic%20rhyolites%20and%20tuffs,which%20form%20nutrient%2Dpoor%20soils.
            //Rock falls	https://www.nps.gov/grca/planyourvisit/weather-dangers.htm
            [
                'name' => 'Plants Fossils',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],
            [
                'name' => 'Potassium',
                'source' => 'https://www.nps.gov/yell/learn/nature/influence-of-geology.htm#:~:text=The%20volcanic%20rhyolites%20and%20tuffs,which%20form%20nutrient%2Dpoor%20soils.'
            ],
            [
                'name' => 'Pyroxene',
                'source' => 'http://npshistory.com/brochures/grsa/geology1.pdf'
            ],
            [
                'name' => 'Quartz',
                'source' => 'https://www.nps.gov/yell/learn/nature/influence-of-geology.htm#:~:text=The%20volcanic%20rhyolites%20and%20tuffs,which%20form%20nutrient%2Dpoor%20soils.'
            ],
            [
                'name' => 'Rock falls',
                'source' => 'https://www.nps.gov/grca/planyourvisit/weather-dangers.htm'
            ],

            //Rugose Coral Fossils	https://www.nps.gov/wica/learn/nature/paleontology.htm#:~:text=You%20can%20experience%20small%20windows,of%20Wind%20Cave's%20tour%20routes.
            //Saddle	https://peakvisor.com/park/grand-canyon-national-park.html
            //Salamander Glacier	https://www.nps.gov/glac/learn/nature/how-to-see-a-glacier.htm
            //San Juan - Highest	https://www.nps.gov/grsa/learn/nature/sanddunes.htm#:~:text=Uplift%20of%20the%20San%20Juan%20and%20Sangre%20de%20Cristo%20Mountains&text=The%20San%20Juan%20Mountains%20were,of%20the%20state%20of%20Connecticut.
            //Sand Collapse	https://www.nps.gov/grsa/planyourvisit/safety.htm
            //Sangre De Cristo	https://www.nps.gov/grsa/learn/nature/sanddunes.htm#:~:text=Uplift%20of%20the%20San%20Juan%20and%20Sangre%20de%20Cristo%20Mountains&text=The%20San%20Juan%20Mountains%20were,of%20the%20state%20of%20Connecticut.
            [
                'name' => 'Rugose Coral Fossils',
                'source' => 'https://www.nps.gov/wica/learn/nature/paleontology.htm#:~:text=You%20can%20experience%20small%20windows,of%20Wind%20Cave\'s%20tour%20routes.'
            ],
            [
                'name' => 'Saddle',
                'source' => 'https://peakvisor.com/park/grand-canyon-national-park.html'
            ],
            [
                'name' => 'Salamander Glacier',
                'source' => 'https://www.nps.gov/glac/learn/nature/how-to-see-a-glacier.htm'
            ],
            [
                'name' => 'San Juan - Highest',
                'source' => 'https://www.nps.gov/grsa/learn/nature/sanddunes.htm#:~:text=Uplift%20of%20the%20San%20Juan%20and%20Sangre%20de%20Cristo%20Mountains&text=The%20San%20Juan%20Mountains%20were,of%20the%20state%20of%20Connecticut.'
            ],
            [
                'name' => 'Sand Collapse',
                'source' => 'https://www.nps.gov/grsa/planyourvisit/safety.htm'
            ],
            [
                'name' => 'Sangre De Cristo',
                'source' => 'https://www.nps.gov/grsa/learn/nature/sanddunes.htm#:~:text=Uplift%20of%20the%20San%20Juan%20and%20Sangre%20de%20Cristo%20Mountains&text=The%20San%20Juan%20Mountains%20were,of%20the%20state%20of%20Connecticut.'
            ],

            //Sedimentary -  Novaculite	https://www.nps.gov/hosp/learn/nature/hotsprings.htm
            //Sedimentary - Chert 	https://www.nps.gov/hosp/learn/nature/hotsprings.htm
            //Sedimentary - Conglomerate
            //Sedimentary - Hornfels
            //Sedimentary - Limestone
            //Sedimentary - Marble
            //Sedimentary - Sandstones
            //Sedimentary - Shale
            [
                'name' => 'Sedimentary -  Novaculite',
                'source' => 'https://www.nps.gov/hosp/learn/nature/hotsprings.htm'
            ],
            [
                'name' => 'Sedimentary - Chert',
                'source' => 'https://www.nps.gov/hosp/learn/nature/hotsprings.htm'
            ],
            [
                'name' => 'Sedimentary - Conglomerate',
                'source' => ''
            ],
            [
                'name' => 'Sedimentary - Hornfels',
                'source' => ''
            ],
            [
                'name' => 'Sedimentary - Limestone',
                'source' => ''
            ],
            [
                'name' => 'Sedimentary - Marble',
                'source' => ''
            ],
            [
                'name' => 'Sedimentary - Sandstones',
                'source' => ''
            ],
            [
                'name' => 'Sedimentary - Shale',
                'source' => ''
            ],

            //Shark Teeth Fossils	http://geology.teacherfriendlyguide.org/index.php/fossils-intro-nc/fossils-region3-nc#:~:text=In%20addition%2C%20a%20variety%20of,%2C%20leaves%2C%20and%20freshwater%20clams.
            //Shepard	https://www.nps.gov/glac/learn/nature/geologicformations.htm
            //Silica 	http://larryeifert.com/craterlakefoundation.org/library/nature-notes/vol17-rocks-crater-lake.htm#:~:text=Most%20of%20the%20rock%20in,in%20color%2C%20sometimes%20almost%20black.
            //Silver	https://explorethecanyon.com/geology-of-the-grand-canyon/
            //Sits On The Boundary Between Two Of The Earth'S Major Crustal	https://www.nps.gov/glba/learn/kidsyouth/geology-of-glacier-bay-national-park.htm#:~:text=Glacier%20Bay%20National%20Park%20sits,the%20continental%20North%20American%20Plate.
            //Snake River	https://www.nps.gov/yell/learn/nature/water.htm
            //Sperry Glacier	https://www.nps.gov/glac/learn/nature/how-to-see-a-glacier.htm
            [
                'name' => 'Shark Teeth Fossils',
                'source' => 'http://geology.teacherfriendlyguide.org/index.php/fossils-intro-nc/fossils-region3-nc#:~:text=In%20addition%2C%20a%20variety%20of,%2C%20leaves%2C%20and%20freshwater%20clams.'
            ],
            [
                'name' => 'Shepard',
                'source' => 'https://www.nps.gov/glac/learn/nature/geologicformations.htm'
            ],
            [
                'name' => 'Silica',
                'source' => 'http://larryeifert.com/craterlakefoundation.org/library/nature-notes/vol17-rocks-crater-lake.htm#:~:text=Most%20of%20the%20rock%20in,in%20color%2C%20sometimes%20almost%20black.'
            ],
            [
                'name' => 'Silver',
                'source' => 'https://explorethecanyon.com/geology-of-the-grand-canyon/'
            ],
            [
                'name' => 'Sits On The Boundary Between Two Of The Earth\'S Major Crustal',
                'source' => 'https://www.nps.gov/glba/learn/kidsyouth/geology-of-glacier-bay-national-park.htm#:~:text=Glacier%20Bay%20National%20Park%20sits,the%20continental%20North%20American%20Plate.'
            ],
            [
                'name' => 'Snake River',
                'source' => 'https://www.nps.gov/yell/learn/nature/water.htm'
            ],
            [
                'name' => 'Sperry Glacier',
                'source' => 'https://www.nps.gov/glac/learn/nature/how-to-see-a-glacier.htm'
            ],

            //Stromatolite Fossils	https://www.nps.gov/glac/learn/nature/fossils.htm#:~:text=Some%20of%20the%20best%20known,hard%20buildups%20of%20bacterial%20mats.
            //Stromatolites	http://npshistory.com/publications/deva/grdtr-99-01.pdf
            //Sugarloaf	https://peakvisor.com/park/hot-springs-national-park.html
            //Summers - comfortable	https://weatherspark.com/y/150297/Average-Weather-in-Rocky-Mountain-National-Park-Colorado-United-States-Year-Round#:~:text=In%20Rocky%20Mountain%20National%20Park%2C%20the%20summers%20are%20comfortable%3B%20the,or%20above%2085%C2%B0F.
            //Summers - comfortable, windy, and partly cloudy	https://weatherspark.com/y/150304/Average-Weather-in-Hawai%E2%80%98i-Volcanoes-National-Park-Hawaii-United-States-Year-Round
            //Summers - hot and muggy	https://weatherspark.com/y/10211/Average-Weather-in-Hot-Springs-National-Park-Arkansas-United-States-Year-Round#:~:text=In%20Hot%20Springs%20National%20Park%2C%20the%20summers%20are%20hot%20and,or%20above%2099%C2%B0F.
            [
                'name' => 'Stromatolite Fossils',
                'source' => 'https://www.nps.gov/glac/learn/nature/fossils.htm#:~:text=Some%20of%20the%20best%20known,hard%20buildups%20of%20bacterial%20mats.'
            ],
            [
                'name' => 'Stromatolites',
                'source' => 'http://npshistory.com/publications/deva/grdtr-99-01.pdf'
            ],
            [
                'name' => 'Sugarloaf',
                'source' => 'https://peakvisor.com/park/hot-springs-national-park.html'
            ],
            [
                'name' => 'Summers - comfortable',
                'source' => 'https://weatherspark.com/y/150297/Average-Weather-in-Rocky-Mountain-National-Park-Colorado-United-States-Year-Round#:~:text=In%20Rocky%20Mountain%20National%20Park%2C%20the%20summers%20are%20comfortable%3B%20the,or%20above%2085%C2%B0F.'
            ],
            [
                'name' => 'Summers - comfortable, windy, and partly cloudy',
                'source' => 'https://weatherspark.com/y/150304/Average-Weather-in-Hawai%E2%80%98i-Volcanoes-National-Park-Hawaii-United-States-Year-Round'
            ],
            [
                'name' => 'Summers - hot and muggy',
                'source' => 'https://weatherspark.com/y/10211/Average-Weather-in-Hot-Springs-National-Park-Arkansas-United-States-Year-Round#:~:text=In%20Hot%20Springs%20National%20Park%2C%20the%20summers%20are%20hot%20and,or%20above%2099%C2%B0F.'
            ],

            //Summers - short, comfortable, dry, mostly clear.	https://weatherspark.com/y/150294/Average-Weather-in-Yellowstone-National-Park-Wyoming-United-States-Year-Round#:~:text=In%20Yellowstone%20National%20Park%2C%20the,or%20above%2084%C2%B0F.
            //Summers - unpredictable	https://www.nps.gov/glac/planyourvisit/weather.htm
            //Summers - very hot	https://www.climatestotravel.com/climate/united-states/death-valley
            //Summers - warm	https://www.nps.gov/wica/planyourvisit/weather.htm#:~:text=Generally%2C%20the%20climate%20is%20semi,because%20of%20two%20weather%20patterns.
            //Summers - warm and dry	https://weatherspark.com/y/150322/Average-Weather-in-Great-Sand-Dunes-National-Park-Colorado-United-States-Year-Round
            [
                'name' => 'Summers - short, comfortable, dry, mostly clear.',
                'source' => 'https://weatherspark.com/y/150294/Average-Weather-in-Yellowstone-National-Park-Wyoming-United-States-Year-Round#:~:text=In%20Yellowstone%20National%20Park%2C%20the,or%20above%2084%C2%B0F.'
            ],
            [
                'name' => 'Summers - unpredictable',
                'source' => 'https://www.nps.gov/glac/planyourvisit/weather.htm'
            ],
            [
                'name' => 'Summers - very hot',
                'source' => 'https://www.climatestotravel.com/climate/united-states/death-valley'
            ],
            [
                'name' => 'Summers - warm',
                'source' => 'https://www.nps.gov/wica/planyourvisit/weather.htm#:~:text=Generally%2C%20the%20climate%20is%20semi,because%20of%20two%20weather%20patterns.'
            ],
            [
                'name' => 'Summers - warm and dry',
                'source' => 'https://weatherspark.com/y/150322/Average-Weather-in-Great-Sand-Dunes-National-Park-Colorado-United-States-Year-Round'
            ],
            //Summers - warm, dry, and mostly clear 	https://weatherspark.com/y/150311/Average-Weather-in-Crater-Lake-National-Park-Oregon-United-States-Year-Round#:~:text=In%20Crater%20Lake%20National%20Park%2C%20the%20summers%20are%20warm%2C%20dry,or%20above%2094%C2%B0F.
            //Tectonic Hotspot.	https://homework.study.com/explanation/what-is-the-plate-tectonic-setting-of-yellowstone-national-park.html#:~:text=The%20plate%20tectonic%20setting%20of%20Yellowstone%20National%20Park%20is%20a,it%2C%20creating%20a%20magma%20plume.
            //Telescope Peak - Highest	https://www.britannica.com/place/Death-Valley
            //Terrestrial Fossils	https://www.nps.gov/grca/learn/nature/fossils.htm#:~:text=The%20sedimentary%20rocks%20exposed%20throughout,scorpions%2C%20centipedes%2C%20and%20reptiles.
            //The Uinkaret volcanic field	https://azgs.arizona.edu/photo/vulcans-throne-uinkaret-volcanic-field-north-rim-grand-canyon
            [
                'name' => 'Summers - warm, dry, and mostly clear',
                'source' => 'https://weatherspark.com/y/150311/Average-Weather-in-Crater-Lake-National-Park-Oregon-United-States-Year-Round#:~:text=In%20Crater%20Lake%20National%20Park%2C%20the%20summers%20are%20warm%2C%20dry,or%20above%2094%C2%B0F.'
            ],
            [
                'name' => 'Tectonic Hotspot.',
                'source' => 'https://homework.study.com/explanation/what-is-the-plate-tectonic-setting-of-yellowstone-national-park.html#:~:text=The%20plate%20tectonic%20setting%20of%20Yellowstone%20National%20Park%20is%20a,it%2C%20creating%20a%20magma%20plume.'
            ],
            [
                'name' => 'Telescope Peak - Highest',
                'source' => 'https://www.britannica.com/place/Death-Valley'
            ],
            [
                'name' => 'Terrestrial Fossils',
                'source' => 'https://www.nps.gov/grca/learn/nature/fossils.htm#:~:text=The%20sedimentary%20rocks%20exposed%20throughout,scorpions%2C%20centipedes%2C%20and%20reptiles.'
            ],
            [
                'name' => 'The Uinkaret volcanic field',
                'source' => 'https://azgs.arizona.edu/photo/vulcans-throne-uinkaret-volcanic-field-north-rim-grand-canyon'
            ],

            //Trace Fossils	https://www.nps.gov/yell/learn/nature/fossils.htm#:~:text=They%20include%20corals%2C%20bryozoans%2C%20brachiopods,in%20some%20petrified%20tree%20bark.
            //Trees Entombed By Lava Flow	https://www.nps.gov/havo/learn/news/20150915_pr_programs.htm#:~:text=Fossil%20History%20of%20Hawai'i.&text=Although%20Hawai'i%20didn't,trees%20entombed%20by%20lava%20flows.
            //Tungsten	https://www.sabinocanyon.com/what-minerals-are-found-in-the-rocky-mountains/
            //Ubehebe Crater	https://www.nps.gov/deva/learn/nature/geology.htm#:~:text=Yesterday's%20Volcano,came%20in%20contact%20with%20groundwater.
            //Uneven terrain. 	https://www.nps.gov/hosp/planyourvisit/safety.htm
            //Unstable rocky slopes	https://www.nps.gov/hosp/planyourvisit/safety.htm
            [
                'name' => 'Trace Fossils',
                'source' => 'https://www.nps.gov/yell/learn/nature/fossils.htm#:~:text=They%20include%20corals%2C%20bryozoans%2C%20brachiopods,in%20some%20petrified%20tree%20bark.'
            ],
            [
                'name' => 'Trees Entombed By Lava Flow',
                'source' => 'https://www.nps.gov/havo/learn/news/20150915_pr_programs.htm#:~:text=Fossil%20History%20of%20Hawai%27i.&text=Although%20Hawai%27i%20didn%27t,trees%20entombed%20by%20lava%20flows.'
            ],
            [
                'name' => 'Tungsten',
                'source' => 'https://www.sabinocanyon.com/what-minerals-are-found-in-the-rocky-mountains/'
            ],
            [
                'name' => 'Ubehebe Crater',
                'source' => 'https://www.nps.gov/deva/learn/nature/geology.htm#:~:text=Yesterday%27s%20Volcano,came%20in%20contact%20with%20groundwater.'
            ],
            [
                'name' => 'Uneven terrain.',
                'source' => 'https://www.nps.gov/hosp/planyourvisit/safety.htm'
            ],
            [
                'name' => 'Unstable rocky slopes',
                'source' => 'https://www.nps.gov/hosp/planyourvisit/safety.htm'
            ],
            //Uplift Of The Colorado Plateau.	https://www.nps.gov/grca/learn/nature/grca-geology.htm#:~:text=Uplift%20of%20the%20Colorado%20Plateau,Colorado%20Plateau%20occurred%20is%20puzzling.
            //Uranium	https://explorethecanyon.com/geology-of-the-grand-canyon/
            //Vertebrate Fossils	https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm
            //Vertebrates	https://www.nps.gov/yell/learn/nature/fossils.htm#:~:text=They%20include%20corals%2C%20bryozoans%2C%20brachiopods,in%20some%20petrified%20tree%20bark.
            //Volcanic Activity	https://www.usgs.gov/volcanoes/crater-lake/landslide-and-rockfall-hazards-crater-lake#:~:text=Landslides%20or%20rock%20falls%20could,Lake%20and%20impact%20its%20shore.
            [
                'name' => 'Uplift Of The Colorado Plateau.',
                'source' => 'https://www.nps.gov/grca/learn/nature/grca-geology.htm#:~:text=Uplift%20of%20the%20Colorado%20Plateau,Colorado%20Plateau%20occurred%20is%20puzzling.'
            ],
            [
                'name' => 'Uranium',
                'source' => 'https://explorethecanyon.com/geology-of-the-grand-canyon/'
            ],
            [
                'name' => 'Vertebrate Fossils',
                'source' => 'https://www.nps.gov/articles/nps-geodiversity-atlas-hot-springs-national-park.htm'
            ],
            [
                'name' => 'Vertebrates',
                'source' => 'https://www.nps.gov/yell/learn/nature/fossils.htm#:~:text=They%20include%20corals%2C%20bryozoans%2C%20brachiopods,in%20some%20petrified%20tree%20bark.'
            ],
            [
                'name' => 'Volcanic Activity',
                'source' => 'https://www.usgs.gov/volcanoes/crater-lake/landslide-and-rockfall-hazards-crater-lake#:~:text=Landslides%20or%20rock%20falls%20could,Lake%20and%20impact%20its%20shore.'
            ],
            //Volcanic Eruptions	http://geology.teacherfriendlyguide.org/index.php/hazards-w/hazards-hawaii-w#:~:text=and%20coastal%20hazards-,Volcanic%20Eruptions,therefore%20highly%20fluid%E2%80%94lava%20flows.
            //West Mountain - Highest	https://peakvisor.com/park/hot-springs-national-park.html
            //Winters -  cloudy, snowy	https://www.nps.gov/glac/planyourvisit/weather.htm
            //Winters -  comfortable, windy, and partly cloudy	https://weatherspark.com/y/150304/Average-Weather-in-Hawai%E2%80%98i-Volcanoes-National-Park-Hawaii-United-States-Year-Round
            //Winters -  freezing and snowy, mostly clear year round	https://weatherspark.com/y/150322/Average-Weather-in-Great-Sand-Dunes-National-Park-Colorado-United-States-Year-Round
            //Winters -  freezing, snowy, and windy; partly cloudy year round	https://weatherspark.com/y/150297/Average-Weather-in-Rocky-Mountain-National-Park-Colorado-United-States-Year-Round#:~:text=In%20Rocky%20Mountain%20National%20Park%2C%20the%20summers%20are%20comfortable%3B%20the,or%20above%2085%C2%B0F.
            //Winters -  mild	https://www.climatestotravel.com/climate/united-states/death-valley
            [
                'name' => 'Volcanic Eruptions',
                'source' => 'http://geology.teacherfriendlyguide.org/index.php/hazards-w/hazards-hawaii-w#:~:text=and%20coastal%20hazards-,Volcanic%20Eruptions,therefore%20highly%20fluid%E2%80%94lava%20flows.'
            ],
            [
                'name' => 'West Mountain - Highest',
                'source' => 'https://peakvisor.com/park/hot-springs-national-park.html'
            ],
            [
                'name' => 'Winters -  cloudy, snowy',
                'source' => 'https://www.nps.gov/glac/planyourvisit/weather.htm'
            ],
            [
                'name' => 'Winters -  comfortable, windy, and partly cloudy',
                'source' => 'https://weatherspark.com/y/150304/Average-Weather-in-Hawai%E2%80%98i-Volcanoes-National-Park-Hawaii-United-States-Year-Round'
            ],
            [
                'name' => 'Winters -  freezing and snowy, mostly clear year round',
                'source' => 'https://weatherspark.com/y/150322/Average-Weather-in-Great-Sand-Dunes-National-Park-Colorado-United-States-Year-Round'
            ],
            [
                'name' => 'Winters -  freezing, snowy, and windy; partly cloudy year round',
                'source' => 'https://weatherspark.com/y/150297/Average-Weather-in-Rocky-Mountain-National-Park-Colorado-United-States-Year-Round#:~:text=In%20Rocky%20Mountain%20National%20Park%2C%20the%20summers%20are%20comfortable%3B%20the,or%20above%2085%C2%B0F.'
            ],
            [
                'name' => 'Winters -  mild',
                'source' => 'https://www.climatestotravel.com/climate/united-states/death-valley'
            ],
            //Winters -  semi-arid with mild	https://www.nps.gov/wica/planyourvisit/weather.htm#:~:text=Generally%2C%20the%20climate%20is%20semi,because%20of%20two%20weather%20patterns.
            //Winters - very cold, snowy, and partly cloudy.	https://weatherspark.com/y/150311/Average-Weather-in-Crater-Lake-National-Park-Oregon-United-States-Year-Round#:~:text=In%20Crater%20Lake%20National%20Park%2C%20the%20summers%20are%20warm%2C%20dry,or%20above%2094%C2%B0F.
            //Winters - are freezing, snowy, and partly cloudy.	https://weatherspark.com/y/2486/Average-Weather-in-Grand-Canyon-Arizona-United-States-Year-Round#:~:text=In%20Grand%20Canyon%2C%20the%20summers,or%20above%2091%C2%B0F.
            //Winters - freezing, snowy, and partly cloudy.	https://weatherspark.com/y/150294/Average-Weather-in-Yellowstone-National-Park-Wyoming-United-States-Year-Round#:~:text=In%20Yellowstone%20National%20Park%2C%20the,or%20above%2084%C2%B0F.
            //Winters - very cold and wet, and partly cloudy	https://weatherspark.com/y/10211/Average-Weather-in-Hot-Springs-National-Park-Arkansas-United-States-Year-Round#:~:text=In%20Hot%20Springs%20National%20Park%2C%20the%20summers%20are%20hot%20and,or%20above%2099%C2%B0F.
            //Yellowstone Caldera	https://www.yellowstoneparknet.com/mountains/
            //Yellowstone River	https://www.nps.gov/yell/learn/nature/water.htm
            //Zinc	https://www.sabinocanyon.com/what-minerals-are-found-in-the-rocky-mountains/
            [
                'name' => 'Winters -  semi-arid with mild',
                'source' => 'https://www.nps.gov/wica/planyourvisit/weather.htm#:~:text=Generally%2C%20the%20climate%20is%20semi,because%20of%20two%20weather%20patterns.'
            ],
            [
                'name' => 'Winters - very cold, snowy, and partly cloudy.',
                'source' => 'https://weatherspark.com/y/150311/Average-Weather-in-Crater-Lake-National-Park-Oregon-United-States-Year-Round#:~:text=In%20Crater%20Lake%20National%20Park%2C%20the%20summers%20are%20warm%2C%20dry,or%20above%2094%C2%B0F.'
            ],
            [
                'name' => 'Winters - are freezing, snowy, and partly cloudy.',
                'source' => 'https://weatherspark.com/y/2486/Average-Weather-in-Grand-Canyon-Arizona-United-States-Year-Round#:~:text=In%20Grand%20Canyon%2C%20the%20summers,or%20above%2091%C2%B0F.'
            ],
            [
                'name' => 'Winters - freezing, snowy, and partly cloudy.',
                'source' => 'https://weatherspark.com/y/150294/Average-Weather-in-Yellowstone-National-Park-Wyoming-United-States-Year-Round#:~:text=In%20Yellowstone%20National%20Park%2C%20the,or%20above%2084%C2%B0F.'
            ],
            [
                'name' => 'Winters - very cold and wet, and partly cloudy',
                'source' => 'https://weatherspark.com/y/10211/Average-Weather-in-Hot-Springs-National-Park-Arkansas-United-States-Year-Round#:~:text=In%20Hot%20Springs%20National%20Park%2C%20the%20summers%20are%20hot%20and,or%20above%2099%C2%B0F.'
            ],
            [
                'name' => 'Yellowstone Caldera',
                'source' => 'https://www.yellowstoneparknet.com/mountains/'
            ],
            [
                'name' => 'Yellowstone River',
                'source' => 'https://www.nps.gov/yell/learn/nature/water.htm'
            ],
            [
                'name' => 'Zinc',
                'source' => 'https://www.sabinocanyon.com/what-minerals-are-found-in-the-rocky-mountains/'
            ],
        ];

        DB::table('types')->insert($types);
    }
}
