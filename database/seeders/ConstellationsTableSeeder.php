<?php

namespace Database\Seeders;

use App\Models\Constellation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConstellationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * sail artisan make:seeder ConstellationsTableSeeder
     * @return void
     */
    public function run()
    {
        Constellation::truncate();

        $constellations =  [
            [
                'name' => 'Andromeda',
                'image_name' => 'andromeda',
                'alias' => 'The Chained Maiden',
                'details' => "Andromeda is the 19th largest constellation in the sky, occupying an area of 722 square degrees. It is located in the first quadrant of the northern hemisphere (NQ1). The constellation Andromeda can be seen at latitudes between +90° and -40°. The neighboring constellations are Cassiopeia, Lacerta, Pegasus, Perseus, Pisces and Triangulum. Andromeda has three stars brighter than magnitude 3.00 and three stars located within 10 parsecs (32.6 light years) of Earth. The brightest star in the constellation is Alpha Andromedae, also known by its traditional name, Alpheratz. The nearest star is Ross 248 (spectral class M6V), also known as HH Andromedae. It lies at a distance of only 10.30 light years from Earth. The constellation Andromeda contains nine named stars. The star names approved by the International Astronomical Union (IAU) are Adhil (Xi Andromedae), Almach (Gamma Andromedae A), Alpheratz (Alpha Andromedae Aa), Buna (HD 16175), Mirach (Beta Andromedae), Nembus (51 Andromedae), Sterrennacht (HAT-P-6), Titawin (Upsilon Andromedae A), and Veritate (14 Andromedae A). Andromeda belongs to the Perseus family of constellations, along with Auriga, Cassiopeia, Cepheus, Cetus, Lacerta, Pegasus, Perseus, and Triangulum. It contains three Messier objects – Messier 31 (Andromeda Galaxy), Messier 32 and Messier 110.",
                'myth' => "In Greek mythology, Andromeda was the daughter of King Cepheus of Ethiopia and Queen Cassiopeia, who offended the Nereids (sea nymphs) by claiming she was more beautiful than they were. The nymphs complained to the sea god Poseidon and he sent a sea monster, Cetus, to flood and destroy Cepheus’ lands as punishment for his wife’s boastfulness. When the king sought advice from the Oracle of Ammon on how to prevent complete destruction of his lands, he was told that the only way to appease the gods and nymphs was to sacrifice his daughter to Cetus. Subsequently, Andromeda was chained to a rock and would have been left to the monster if the hero Perseus had not come along and saved her. The two were later married and had six children, including Gorgophonte, who fathered Tyndareus, the famous Spartan king, and Perses, who was an ancestor of the Persians. In the story, it was the goddess Athena who commemorated the princess Andromeda by placing her image among the stars, next to the constellations representing her husband Perseus and mother Cassiopeia.",
                'hemisphere' => 'Northern',
                'season' => 'Autumn'
            ],
            [
                'name' => 'Antlia',
                'image_name' => 'antlia',
                'alias' => 'The Air Pump',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Apus',
                'image_name' => 'apus',
                'alias' => 'The Bird of Paradise',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Aquarius',
                'image_name' => 'aquarius',
                'alias' => 'The Water Bearer',
                'details' => "Aquarius is the 10th largest constellation in the sky, occupying an area of 980 square degrees. It is one of the 15 equatorial constellations. It is located in the fourth quadrant of the southern hemisphere (SQ4) and can be seen at latitudes between +65° and -90°. The neighboring constellations are Aquila, Capricornus, Cetus, Delphinus, Equuleus, Pegasus, Pisces, Piscis Austrinus, and Sculptor. Aquarius contains two stars brighter than magnitude 3.00 and seven stars that are located within 10 parsecs (32.6 light years) of Earth. The brightest star in the constellation is Beta Aquarii, also known as Sadalsuud, with an apparent magnitude of 2.87. The nearest star is EZ Aquarii, a triple star system composed of three M-type dwarfs, located at a distance of 11.27 light years from Earth. The constellation contains 11 named stars. The star names approved by the International Astronomical Union (IAU) are Albali, Ancha, Bosona, Bunda, Lionrock, Márohu, Sadachbia, Sadalmelik, Sadalsuud, Situla, and Skat. Aquarius belongs to the Zodiac family of constellations, along with Aries, Taurus, Gemini, Cancer, Leo, Virgo, Libra, Scorpius, Sagittarius, Capricornus, and Pisces. Aquarius contains three Messier objects: Messier 2 (NGC 7089), Messier 72 (NGC 6981), and Messier 73 (NGC 6994). There are four meteor showers associated with the constellation: the March Aquariids, Eta Aquariids, Delta Aquariids, and Iota Aquariids.",
                'myth' => "Aquarius is depicted as a young man pouring water (or alternatively, nectar) from an amphora into the mouth of the Southern Fish, represented by the constellation Piscis Austrinus. Aquarius is usually associated with Ganymede, the son of King Tros, in Greek mythology. Ganymede was a beautiful Trojan youth who caught Zeus’ eye, which prompted the god to disguise himself as an eagle (represented by the constellation Aquila) and carry him off to Olympus to serve as cup-bearer to the gods. In a different story, the constellation represents Deucalion, son of Prometheus, who survived the great flood along with his wife Pyrrha. In Babylonian mythology, Aquarius is identified as GU.LA (the great one), the god Ea himself and, in Egyptian tales, the constellation was said to represent the god of the Nile.",
                'hemisphere' => 'Southern',
                'season' => 'Autumn'
            ],
            [
                'name' => 'Aquila',
                'image_name' => 'aquila',
                'alias' => 'The Eagle',
                'details' => "Aquila is the 22nd biggest star constellation in the sky, occupying an area of 652 square degrees in the fourth quadrant of the northern hemisphere (NQ4). It can be seen at latitudes between +90° and -75°. The neighboring constellations are Aquarius, Capricornus, Delphinus, Hercules, Ophiuchus, Sagitta, Sagittarius, Scutum, and Serpens Cauda. Aquila is one of the 15 equatorial constellations. It has three stars brighter than magnitude 3.00 and two stars located within 10 parsecs (32.6 light years) of Earth. The brightest star in the constellation is Altair, Alpha Aquilae (spectral class A7 V), which is also the 12th brightest star in the sky. Altair is also the nearest star in Aquila, at a distance of only 16.77 light years from Earth. Aquila contains eight named stars. The proper names of stars that have been officially approved by the International Astronomical Union (IAU) are Alshain, Altair, Chechia, Libertas, Okab, Petra, Phoenicia, and Tarazed. Aquila does not contain any Messier objects. There are two meteor showers associated with the constellation: the June Aquilids and the Epsilon Aquilids. Aquila belongs to the Hercules family of constellations, together with Ara, Centaurus, Corona Australis, Corvus, Crater, Crux, Cygnus, Hercules, Hydra, Lupus, Lyra, Ophiuchus, Sagitta, Scutum, Serpens, Sextans, Triangulum Australe, and Vulpecula.",
                'myth' => "In Greek mythology, Aquila is identified as the eagle that carried Zeus’ thunderbolts and was once dispatched by the god to carry Ganymede, the young Trojan boy Zeus desired, to Olympus to be the cup bearer of the gods. Ganymede is represented by the neighbouring constellation Aquarius. In another story, the eagle is found guarding the arrow of Eros (represented by the constellation Sagitta), which hit Zeus and made him love-struck. In yet another myth, Aquila represents Aphrodite disguised as an eagle, pretending to pursue Zeus in the form of a swan, so that Zeus’ love interest, the goddess Nemesis, would give him shelter. In the story, Zeus later placed the images of the eagle and the swan among the stars to commemorate the event. The name of the brightest star in the constellation, Altair, is derived from the Arabic al-nasr al-ta’ir, which means 'flying eagle' or 'vulture.' Ptolemy called the star Aetus, which is Latin for 'eagle.' Similarly, both Babylonians and Sumerians called Altair 'the eagle star.'",
                'hemisphere' => 'Northern',
                'season' => 'Summer'
            ],
            [
                'name' => 'Ara',
                'image_name' => 'ara',
                'alias' => 'The Altar',
                'details' => "Ara is one of the smaller constellations (63rd in size), with an area of 237 square degrees. It lies in the third quadrant of the southern hemisphere (SQ3) and can be seen at latitudes between +25° and -90°. The neighboring constellations are Apus, Corona Australis, Norma, Pavo, Scorpius, Telescopium, and Triangulum Australe. Ara contains two stars brighter than magnitude 3.00 and three stars located within 10 parsecs (32.6 light years) of Earth. The brightest star in the constellation is Beta Arae. The nearest star, Gliese 674 (spectral class M3V), lies at a distance of 14.80 light years from Earth. There are no meteor showers linked to Ara. The constellation does not contain any Messier objects. Ara contains two named stars. The names of stars that have been officially approved by the International Astronomical Union (IAU) are Cervantes and Inquill. Ara belongs to the Hercules family of constellations, together with Aquila, Centaurus, Corona Australis, Corvus, Crater, Crux, Cygnus, Hercules, Hydra, Lupus, Lyra, Ophiuchus, Sagitta, Scutum, Serpens, Sextans, Triangulum Australe, and Vulpecula.",
                'myth' => "There are several myths associated with the constellation. In one of them, Ara represents the altar on which Zeus and other gods vowed to defeat the Titans and overthrow Cronus, who ruled the universe. Cronus was one of the 12 Titans who had deposed his father Uranus, the previous ruler. When a prophecy said that the same fate would befall Cronus and he would be defeated by one of his own children, to prevent it from happening, he swallowed all his children – Hestia, Demeter, Hera, Hades, and Poseidon – all of them future gods and goddesses. When the youngest child, Zeus, was born, his mother Rhea hid him in Crete and gave Cronus a stone to swallow, telling him the stone was Zeus. When Zeus grew up, he made Cronus vomit his brothers and sisters. Once freed, they swore to overthrow Cronus and the Titans. The war between the gods and the Titans lasted a decade and the gods won in the end. Zeus became the god of the sky, Poseidon became the god of the sea, and Hades the ruler of the underworld. Zeus placed the altar among the stars to commemorate the gods’ victory. In another story, Ara represents the altar of Lycaon, the king of Arcadia who decided to test Zeus by serving him a meal of a dismembered child, and later tried to do away with the god while he slept. Zeus, enraged, transformed Lycaon into a wolf and struck down his 50 sons with lightning bolts. In one version of the tale, the sacrificed child was Arcas, the son of Zeus and Lycaon’s daughter Callisto.",
                'hemisphere' => 'Southern',
                'season' => 'Winter'
            ],
            [
                'name' => 'Aries',
                'image_name' => 'aries',
                'alias' => 'The Ram',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Auriga',
                'image_name' => 'auriga',
                'alias' => 'The Charioteer',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Boötes',
                'image_name' => 'bootes',
                'alias' => 'The Herdsman',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Caelum',
                'image_name' => 'caelum',
                'alias' => 'The Engraving Tool',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Camelopardalis',
                'image_name' => 'camelopardalis',
                'alias' => 'The Giraffe',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Cancer',
                'image_name' => 'cancer',
                'alias' => 'The Crab',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Canes Venatici',
                'image_name' => 'canes_venatici',
                'alias' => 'The Hunting Dogs',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Canis Major',
                'image_name' => 'canis_major',
                'alias' => 'The Great Dog',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Canis Minor',
                'image_name' => 'canis_minor',
                'alias' => 'The Lesser Dog',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Capricornus',
                'image_name' => 'capricornus',
                'alias' => 'The Sea Goat',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Carina',
                'image_name' => 'carina',
                'alias' => 'The Keel',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern (circumpolar)',
                'season' => ''
            ],
            [
                'name' => 'Cassiopeia',
                'image_name' => 'cassiopeia',
                'alias' => 'The Seated Queen',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern (circumpolar)',
                'season' => ''
            ],
            [
                'name' => 'Centaurus',
                'image_name' => 'centaurus',
                'alias' => 'The Centaur',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern (circumpolar)',
                'season' => ''
            ],
            [
                'name' => 'Cepheus',
                'image_name' => 'cepheus',
                'alias' => 'The King',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern (circumpolar)',
                'season' => ''
            ],
            [
                'name' => 'Cetus',
                'image_name' => 'cetus',
                'alias' => 'The Sea Monster',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Chamaeleon',
                'image_name' => 'chamaeleon',
                'alias' => 'The Chamaeleon',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Circinus',
                'image_name' => 'circinus',
                'alias' => 'The Compass',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Columba',
                'image_name' => 'columba',
                'alias' => 'The Dove',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Coma Berenices',
                'image_name' => 'coma_berenices',
                'alias' => "The Bernice's Hair",
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Corona Australis',
                'image_name' => 'corona_australis',
                'alias' => 'The Southern Crown',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Corona Borealis',
                'image_name' => 'corona_borealis',
                'alias' => 'The Northern Crown',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Corvus',
                'image_name' => 'corvus',
                'alias' => 'The Crow',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Crater',
                'image_name' => 'crater',
                'alias' => 'The Cup',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Crux',
                'image_name' => 'crux',
                'alias' => 'The Southern Cross',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern (circumpolar)',
                'season' => ''
            ],
            [
                'name' => 'Cygnus',
                'image_name' => 'cygnus',
                'alias' => 'The Swan',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Delphinus',
                'image_name' => 'delphinus',
                'alias' => 'The Dolphin',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Dorado',
                'image_name' => 'dorado',
                'alias' => 'The Swordfish',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Draco',
                'image_name' => 'draco',
                'alias' => 'The Dragon',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern (circumpolar)',
                'season' => ''
            ],
            [
                'name' => 'Equuleus',
                'image_name' => 'equuleus',
                'alias' => 'The Little Horse',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Eridanus',
                'image_name' => 'eridanus',
                'alias' => 'The River',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Fornax',
                'image_name' => 'fornax',
                'alias' => 'The Furnace',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Gemini',
                'image_name' => 'gemini',
                'alias' => 'The Twins',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Grus',
                'image_name' => 'grus',
                'alias' => 'The Crane',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Hercules',
                'image_name' => 'hercules',
                'alias' => 'Hercules',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Horologium',
                'image_name' => 'horologium',
                'alias' => 'The Clock',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Hydra',
                'image_name' => 'hydra',
                'alias' => 'The Female Water Snake',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Hydrus',
                'image_name' => 'hydrus',
                'alias' => 'The Male Water Snake',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Indus',
                'image_name' => 'indus',
                'alias' => 'The Indian',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Lacerta',
                'image_name' => 'lacerta',
                'alias' => 'The Lizard',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Leo',
                'image_name' => 'leo',
                'alias' => 'The Lion',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Leo Minor',
                'image_name' => 'leo_minor',
                'alias' => 'The Lesser Lion',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Lepus',
                'image_name' => 'lepus',
                'alias' => 'The Hare',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Libra',
                'image_name' => 'libra',
                'alias' => 'The Scales',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Lupus',
                'image_name' => 'lupus',
                'alias' => 'The Wolf',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Lynx',
                'image_name' => 'lynx',
                'alias' => 'The Lynx',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Lyra',
                'image_name' => 'lyra',
                'alias' => 'The Lyre',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Mensa',
                'image_name' => 'mensa',
                'alias' => 'The Table Mountain',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Microscopium',
                'image_name' => 'microscopium',
                'alias' => 'The Microscope',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Monoceros',
                'image_name' => 'monoceros',
                'alias' => 'The Unicorn',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Musca',
                'image_name' => 'musca',
                'alias' => 'The Fly',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Norma',
                'image_name' => 'norma',
                'alias' => "The Carpenter's Square",
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Octans',
                'image_name' => 'octans',
                'alias' => 'The Octant',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Ophiuchus',
                'image_name' => 'ophiuchus',
                'alias' => 'The Serpent Bearer',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Orion',
                'image_name' => 'orion',
                'alias' => 'The Hunter',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Pavo',
                'image_name' => 'pavo',
                'alias' => 'The Peacock',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Pegasus',
                'image_name' => 'pegasus',
                'alias' => 'The Winged Horse',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Perseus',
                'image_name' => 'perseus',
                'alias' => 'The Hero',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Phoenix',
                'image_name' => 'phoenix',
                'alias' => 'The Phoenix',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Pictor',
                'image_name' => 'pictor',
                'alias' => "The Painter's Easel",
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Pisces',
                'image_name' => 'pisces',
                'alias' => 'The Fishes',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Piscis Austrinus',
                'image_name' => 'piscis_austrinus',
                'alias' => 'The Southern Fish',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Puppis',
                'image_name' => 'puppis',
                'alias' => 'The Stern',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Pyxis',
                'image_name' => 'pyxis',
                'alias' => 'The Compass',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Reticulum',
                'image_name' => 'reticulum',
                'alias' => 'The Reticle',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Sagitta',
                'image_name' => 'sagitta',
                'alias' => 'The Arrow',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Sagittarius',
                'image_name' => 'sagittarius',
                'alias' => 'The Archer',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Scorpius',
                'image_name' => 'scorpius',
                'alias' => 'The Scorpion',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Sculptor',
                'image_name' => 'sculptor',
                'alias' => 'The Sculptor',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Scutum',
                'image_name' => 'scutum',
                'alias' => 'The Shield',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Serpens',
                'image_name' => 'serpens',
                'alias' => 'The Serpent',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Sextans',
                'image_name' => 'sextans',
                'alias' => 'The Sextant',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Taurus',
                'image_name' => 'taurus',
                'alias' => 'The Bull',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Telescopium',
                'image_name' => 'telescopium',
                'alias' => 'The Telescope',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Triangulum',
                'image_name' => 'triangulum',
                'alias' => 'The Triangle',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
            [
                'name' => 'Triangulum Australe',
                'image_name' => 'triangulum_australe',
                'alias' => 'The Southern Triangle',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Tucana',
                'image_name' => 'tucana',
                'alias' => 'The Toucan',
                'details' => "",
                'myth' => "",
                'hemisphere' => '',
                'season' => ''
            ],
            [
                'name' => 'Ursa Major',
                'image_name' => 'ursa_major',
                'alias' => 'The Great Bear',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern (circumpolar)',
                'season' => ''
            ],
            [
                'name' => 'Ursa Minor',
                'image_name' => 'ursa_major',
                'alias' => 'The Little Bear',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern (circumpolar)',
                'season' => ''
            ],
            [
                'name' => 'Vela',
                'image_name' => 'vela',
                'alias' => 'The Sails',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Virgo',
                'image_name' => 'virgo',
                'alias' => 'The Maiden',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Volans',
                'image_name' => 'volans',
                'alias' => 'The Flying Fish',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Southern',
                'season' => ''
            ],
            [
                'name' => 'Vulpecula',
                'image_name' => 'vulpecula',
                'alias' => 'The Fox',
                'details' => "",
                'myth' => "",
                'hemisphere' => 'Northern',
                'season' => ''
            ],
          ];

          Constellation::insert($constellations);
    }
}
