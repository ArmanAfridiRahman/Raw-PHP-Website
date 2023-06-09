<?php

namespace App\classes;

class Entity
{
    public $entities = [], $data = [];

    public function __construct()
    {
        $this->entities = [
            0 => [
                'id'            => 1,
                'category_id'   => 1,
                'name'          => 'Milky Way',
                'short_description'   => "The Milky Way is the galaxy that includes the Solar System, with the name describing the galaxy's appearance from Earth: a hazy band of light seen in the night sky formed from stars that cannot be individually distinguished by the naked eye.",
                'description' => "The Milky Way[c] is the galaxy that includes the Solar System, with the name describing the galaxy's appearance from Earth: a hazy band of light seen in the night sky formed from stars that cannot be individually distinguished by the naked eye. The term Milky Way is a translation of the Latin via lactea, from the Greek γαλακτικὸς κύκλος (galaktikòs kýklos), meaning 'milky circle''.[26][27] From Earth, the Milky Way appears as a band because its disk-shaped structure is viewed from within. Galileo Galilei first resolved the band of light into individual stars with his telescope in 1610. Until the early 1920s, most astronomers thought that the Milky Way contained all the stars in the Universe.[28] Following the 1920 Great Debate between the astronomers Harlow Shapley and Heber Doust Curtis,[29] observations by Edwin Hubble showed that the Milky Way is just one of many galaxies.

The Milky Way is a barred spiral galaxy with a D25 isophotal diameter estimated at 26.8 ± 1.1 kiloparsecs (87,400 ± 3,590 light-years),[10] but only about 1,000 light-years thick at the spiral arms (more at the bulge). Recent simulations suggest that a dark matter area, also containing some visible stars, may extend up to a diameter of almost 2 million light-years (613 kpc).[30][31] The Milky Way has several satellite galaxies and is part of the Local Group of galaxies, which form part of the Virgo Supercluster, which is itself a component of the Laniakea Supercluster.[32][33]

It is estimated to contain 100–400 billion stars[34][35] and at least that number of planets.[36][37] The Solar System is located at a radius of about 27,000 light-years (8.3 kpc) from the Galactic Center,[38] on the inner edge of the Orion Arm, one of the spiral-shaped concentrations of gas and dust. The stars in the innermost 10,000 light-years form a bulge and one or more bars that radiate from the bulge. The Galactic Center is an intense radio source known as Sagittarius A*, a supermassive black hole of 4.100 (± 0.034) million solar masses.[39][40] Stars and gases at a wide range of distances from the Galactic Center orbit at approximately 220 kilometers per second (136 miles per second). The constant rotational speed appears to contradict the laws of Keplerian dynamics and suggests that much (about 90%)[7][8] of the mass of the Milky Way is invisible to telescopes, neither emitting nor absorbing electromagnetic radiation. This conjectural mass has been termed 'dark matter'.[41] The rotational period is about 212 million years at the radius of the Sun.[16]

The Milky Way as a whole is moving at a velocity of approximately 600 km per second (372 miles per second) with respect to extragalactic frames of reference. The oldest stars in the Milky Way are nearly as old as the Universe itself and thus probably formed shortly after the Dark Ages of the Big Bang.",
                'image'         => 'assets/img/milkyway.jpg',
            ],
            1 => [
                'id'            => 2,
                'category_id'   => 1,
                'name'          => 'Andromeda',
                'short_description'   => "The Andromeda Galaxy is a barred spiral galaxy and is the closest major galaxy to the Milky Way, where the Solar System resides. It was originally named the Andromeda Nebula and is cataloged as Messier 31, M31, and NGC 224. Andromeda has a diameter of about 46.56 kiloparsecs and is approximately 765 kpc from Earth.",
                'description' => "The Andromeda Galaxy is a barred spiral galaxy and is the closest major galaxy to the Milky Way, where the Solar System resides. It was originally named the Andromeda Nebula and is cataloged as Messier 31, M31, and NGC 224. Andromeda has a diameter of about 46.56 kiloparsecs (152,000 light-years)[8] and is approximately 765 kpc (2.5 million light-years) from Earth. The galaxy's name stems from the area of Earth's sky in which it appears, the constellation of Andromeda, which itself is named after the princess who was the wife of Perseus in Greek mythology.

The virial mass of the Andromeda Galaxy is of the same order of magnitude as that of the Milky Way, at 1 trillion solar masses (2.0×1042 kilograms). The mass of either galaxy is difficult to estimate with any accuracy, but it was long thought that the Andromeda Galaxy was more massive than the Milky Way by a margin of some 25% to 50%. This has been called into question by early 21st-century studies indicating a possibly lower mass for the Andromeda Galaxy[11] and a higher mass for the Milky Way.[12][13] The Andromeda Galaxy has a diameter of about 46.56 kpc (152,000 ly), making it the largest member of the Local Group of galaxies in terms of extension.

The Milky Way and Andromeda galaxies are expected to collide in around 4–5 billion years,[14] merging to potentially form a giant elliptical galaxy[15] or a large lenticular galaxy.[16] With an apparent magnitude of 3.4, the Andromeda Galaxy is among the brightest of the Messier objects,[17] and is visible to the naked eye from Earth on moonless nights,[18] even when viewed from areas with moderate light pollution.",
                'image'         => 'assets/img/andromeda.jpg',
            ],
            2 => [
                'id'            => 3,
                'category_id'   => 1,
                'name'          => 'Whirlpool Galaxy',
                'short_description'   => "The Whirlpool Galaxy, also known as Messier 51a or NGC 5194, is an interacting grand-design spiral galaxy with a Seyfert 2 active galactic nucleus. It lies in the constellation Canes Venatici, and was the first galaxy to be classified as a spiral galaxy.",
                'description' => "The Whirlpool Galaxy, also known as Messier 51a (M51a) or NGC 5194, is an interacting grand-design spiral galaxy with a Seyfert 2 active galactic nucleus.[7][8][9] It lies in the constellation Canes Venatici, and was the first galaxy to be classified as a spiral galaxy.[10] It is between 23 and 31 million light-years away[3] and 76,900 ly (23,580 pc) in diameter.[11]

The galaxy and its companion, NGC 5195,[12] are easily observed by amateur astronomers, and the two galaxies may be seen with binoculars.[13] The Whirlpool Galaxy has been extensively observed by professional astronomers, and its pair with NGC 5195 who study it to understand galaxy structure (particularly structure associated with the spiral arms) and galaxy interactions. Its pair with NGC 5194 is among the most famous and relatively close interacting systems, and thus is a favorite subject of galaxy interaction models.",
                'image'         => 'assets/img/Whirlpool-Galaxy.jpg',
            ],
            3 => [
                'id'            => 4,
                'category_id'   => 1,
                'name'          => 'Sombrero Galaxy',
                'short_description'   => "The Sombrero Galaxy is a peculiar galaxy of unclear classification in the constellation borders of Virgo and Corvus, being about 9.55 megaparsecs from the Milky Way galaxy. It is a member of the Virgo II Groups, a series of galaxies and galaxy clusters strung out from the southern edge of the Virgo Supercluster.",
                'description' => "The Sombrero Galaxy (also known as Messier Object 104, M104 or NGC 4594) is a peculiar galaxy of unclear classification[5] in the constellation borders of Virgo and Corvus, being about 9.55 megaparsecs (31.1 million light-years)[2] from the Milky Way galaxy. It is a member of the Virgo II Groups, a series of galaxies and galaxy clusters strung out from the southern edge of the Virgo Supercluster.[6] It has a D25 isophotal diameter of approximately 29.09 kiloparsecs (94,900 light-years),[1] making it slightly bigger in size than the Milky Way.

It has a bright nucleus, an unusually large central bulge, and a prominent dust lane in its outer disk, which is viewed almost edge-on. The dark dust lane and the bulge give it the appearance of a sombrero hat (thus the name). Astronomers initially thought the halo was small and light, indicative of a spiral galaxy; but the Spitzer Space Telescope found that the dust ring was larger and more massive than previously thought, indicative of a giant elliptical galaxy.[7] However it is now believed that the Sombrero Galaxy is a Lenticular galaxy combining both the characteristics of an elliptical galaxy and a spiral galaxy.

The galaxy has an apparent magnitude of +8.0,[8] making it easily visible with amateur telescopes, and is considered by some authors to be the galaxy with the highest absolute magnitude within a radius of 10 megaparsecs of the Milky Way.[4] Its large bulge, central supermassive black hole, and dust lane all attract the attention of professional astronomers.",
                'image'         => 'assets/img/Sombrero-Galaxy.jpg',
            ],
            4 => [
                'id'            => 5,
                'category_id'   => 1,
                'name'          => 'Black Eye Galaxy',
                'short_description'   => "The Black Eye Galaxy is a relatively isolated spiral galaxy 17 million light-years away in the mildly northern constellation of Coma Berenices. It was discovered by Edward Pigott in March 1779, and independently by Johann Elert Bode in April of the same year, as well as by Charles Messier the next year.",
                'description' => "The Black Eye Galaxy (also called Sleeping Beauty Galaxy or Evil Eye Galaxy and designated Messier 64, M64, or NGC 4826) is a relatively isolated[7] spiral galaxy 17 million light-years away in the mildly northern constellation of Coma Berenices. It was discovered by Edward Pigott in March 1779, and independently by Johann Elert Bode in April of the same year, as well as by Charles Messier the next year. A dark band of absorbing dust partially in front of its bright nucleus gave rise to its nicknames of the 'Black Eye', 'Evil Eye', or 'Sleeping Beauty' galaxy.[11][12] M64 is well known among amateur astronomers due to its form in small telescopes and visibility across inhabited latitudes.

This galaxy is inclined 60° to the line-of-sight and has a position angle of 112°.[7] At the distance of this galaxy, it has a linear scale of 65 ly (20 pc) per arcsecond.[7] The morphological classification in the De Vaucouleurs system is (R)SA(rs)ab,[4] where the '(R)' indicates an outer ring-like structure, 'SA' denotes a non-barred spiral, '(rs)' means a transitional inner ring/spiral structure, and 'ab' says the spiral arms are fairly tightly wound.[13] Ann et al. (2015) gave it a class of SABa,[14] suggesting a weakly barred spiral galaxy with tightly wound arms.

M64 is a type 2 Seyfert galaxy[15] with an HII/LINER nucleus. The central region is a weak source of radio emission.[7] A soft X-ray source has been detected at the nucleus, which is most likely coming from the circumnuclear region rather than directly from an active galactic nucleus.[16] There is an inner disk of molecular gas that is truncated at a radius of 2,300 ly (700 pc). At present, the non-rotational motions of this disk do not significantly feed the core, but the disk does produce a vigorous rate of star formation, with also approximately 100 billion stars inside the galaxy.[11] There is also evidence of a recent large inflow of mass.[17]

The interstellar medium of Messier 64 consists of two counter-rotating disks that are approximately equal in mass.[18] The inner disk contains the prominent dust lanes of the galaxy. The stellar population of the galaxy exhibits no measurable counter-rotation.[19] Possible formation scenarios include a merger with a gas-rich satellite galaxy in a retrograde orbit, or the continued accretion of gas clouds from the intergalactic medium.[18][19] It has a diameter of 16.51 kiloparsecs (53,800 light-years).",
                'image'         => 'assets/img/Black-Eye-Galaxy.jpg',
            ],
            5 => [
                'id'            => 6,
                'category_id'   => 2,
                'name'          => 'Solar System',
                'short_description'   => "The Solar System is the gravitationally bound system of the Sun and the objects that orbit it. The largest of such objects are the eight planets, in order from the Sun: four terrestrial planets named Mercury, Venus, Earth and Mars, two gas giants named Jupiter and Saturn, and two ice giants named Uranus and Neptune.",
                'description' => "The Solar System[c] is the gravitationally bound system of the Sun and the objects that orbit it. The largest of such objects are the eight planets, in order from the Sun: four terrestrial planets named Mercury, Venus, Earth and Mars, two gas giants named Jupiter and Saturn, and two ice giants named Uranus and Neptune. The terrestrial planets have a definite surface and are mostly made of rock and metal. The gas giants are mostly made of hydrogen and helium, while the ice giants are mostly made of 'volatile' substances such as water, ammonia, and methane. In some texts, these terrestrial and giant planets are called the inner Solar System and outer Solar System planets respectively.

The Solar System was formed 4.6 billion years ago from the gravitational collapse of a giant interstellar molecular cloud. Over time, the cloud formed the Sun and a protoplanetary disk that gradually coalesced to form planets and other objects. That is the reason why all eight planets have an orbit that lies near the same plane. In the present day, 99.86% of the Solar System's mass is in the Sun and most of the remaining mass is contained in the planet Jupiter. Six planets, six largest possible dwarf planets and many other bodies have natural satellites or moons orbiting around them. All giant planets and a few smaller bodies are encircled by planetary rings, composed of ice, dust and sometimes moonlets.

There are an unknown number of smaller dwarf planets and innumerable small bodies orbiting the Sun.[d] These objects are distributed in the asteroid belt that lies between the orbits of Mars and Jupiter, the Kuiper belt, the scattered disc that both lies beyond Neptune's orbit and at even further reaches of the Solar System which they would be classified as an extreme trans-Neptunian object. There is consensus among astronomers to these nine objects as dwarf planets: the asteroid Ceres, the Kuiper-belt objects Pluto, Orcus, Haumea, Quaoar, and Makemake, and the scattered-disc objects Gonggong, Eris, and Sedna.[d] Many small-body populations, including comets, centaurs and interplanetary dust clouds, freely travel between the regions of the Solar System.

The solar wind, a stream of charged particles flowing outwards from the Sun, creates a bubble-like region of the interplanetary medium in the interstellar medium known as the heliosphere. The heliopause is the point at which pressure from the solar wind is equal to the opposing pressure of the interstellar medium; it extends out to the edge of the scattered disc. The Oort cloud, which is thought to be the source for long-period comets, may also exist at a distance roughly a thousand times further than the heliosphere. The nearest stars to the Solar System are within the Local Bubble; the closest star is named Proxima Centauri and is at a distance of 4.2441 light-years away.",
                'image'         => 'assets/img/licensed-image.jfif',
            ],
            6 => [
                'id'            => 7,
                'category_id'   => 2,
                'name'          => '85 Pegasi',
                'short_description'   => "85 Pegasi is a multiple star system 39.5 light years away in the constellation of Pegasus. The primary component is sixth magnitude 85 Pegasi A, which is a yellow dwarf like the Sun.",
                'description' => "85 Pegasi is a multiple star system 39.5 light years away[2] in the constellation of Pegasus. The primary component is sixth magnitude 85 Pegasi A, which is a yellow dwarf like the Sun. The secondary component, 85 Pegasi B, is a ninth magnitude orange dwarf that takes 26.28 years to orbit at 10.3 AU around the primary in an elliptical orbit. The orbital distance ranges from 6.4 AU at periastron to 14.2 AU at apastron. 85 Pegasi B may itself be a binary, with a close, faint red dwarf companion (designated 85 Pegasi Bb) separated by 2 AU from the primary (designated 85 Pegasi Ba). The mass would be 11% solar mass (M☉). All components in the star system including Star A are smaller, cooler and less massive, luminous, and metallic than the Sun and 51 Pegasi.

An infrared excess has been detected around the primary, most likely indicating the presence of a circumstellar disk at a radius of more than 97 AU. The temperature of this dust is below 25 K.[",
                'image'         => 'assets/img/85-Pegasi.jpg',
            ],
            7 => [
                'id'            => 8,
                'category_id'   => 2,
                'name'          => 'Alpha Centauri',
                'short_description'   => "Alpha Centauri is a triple star system in the southern constellation of Centaurus. It consists of three stars: Rigil Kentaurus, Toliman and Proxima Centauri. Proxima Centauri is also the closest star to the Sun at 4.2465 light-years.",
                'description' => "Alpha Centauri (α Centauri, Alpha Cen, or α Cen) is a triple star system in the southern constellation of Centaurus. It consists of three stars: Rigil Kentaurus (Alpha Centauri A), Toliman (B) and Proxima Centauri (C).[13] Proxima Centauri is also the closest star to the Sun at 4.2465 light-years (1.3020 pc).

Alpha Centauri A and B are Sun-like stars (Class G and K, respectively), and together they form the binary star system Alpha Centauri AB. To the naked eye, the two main components appear to be a single star with an apparent magnitude of −0.27. It is the brightest star in the constellation and the third-brightest in the night sky, outshone only by Sirius and Canopus.

Alpha Centauri A has 1.1 times the mass and 1.5 times the luminosity of the Sun, while Alpha Centauri B is smaller and cooler, at 0.9 times the Sun's mass and less than 0.5 times its luminosity.[14] The pair orbit around a common centre with an orbital period of 79 years.[15] Their elliptical orbit is eccentric, so that the distance between A and B varies from 35.6 astronomical units (AU), or about the distance between Pluto and the Sun, to 11.2 AU, or about the distance between Saturn and the Sun.

Alpha Centauri C, or Proxima Centauri, is a small faint red dwarf (Class M). Though not visible to the naked eye, Proxima Centauri is the closest star to the Sun at a distance of 4.24 ly (1.30 pc), slightly closer than Alpha Centauri AB. Currently, the distance between Proxima Centauri and Alpha Centauri AB is about 13,000 AU (0.21 ly),[16] equivalent to about 430 times the radius of Neptune's orbit.

Proxima Centauri has two confirmed planets: Proxima b, an Earth-sized planet in the habitable zone discovered in 2016, and Proxima d, a candidate sub-Earth which orbits very closely to the star, announced in 2022.[17] The existence of Proxima c, a mini-Neptune 1.5 AU away discovered in 2019, is controversial.[18] Alpha Centauri A may have a candidate Neptune-sized planet in the habitable zone, though it is not yet known to be planetary in nature and could be an artifact of the discovery mechanism.[19] Alpha Centauri B has no known planets: planet Bb, purportedly discovered in 2012, was later disproven,[20] and no other planet has yet been confirmed.",
                'image'         => 'assets/img/Alpha-Centauri.jpg',
            ],
            8 => [
                'id'            => 9,
                'category_id'   => 3,
                'name'          => 'Sun',
                'short_description'   => "The Sun is the star at the center of the Solar System. It is a nearly perfect ball of hot plasma, heated to incandescence by nuclear fusion reactions in its core. The Sun radiates this energy mainly as light, ultraviolet, and infrared radiation, and is the most important source of energy for life on Earth.",
                'description' => "The Sun is the star at the center of the Solar System. It is a nearly perfect ball of hot plasma,[18][19] heated to incandescence by nuclear fusion reactions in its core. The Sun radiates this energy mainly as light, ultraviolet, and infrared radiation, and is the most important source of energy for life on Earth.

The Sun's radius is about 695,000 kilometers (432,000 miles), or 109 times that of Earth. Its mass is about 330,000 times that of Earth, comprising about 99.86% of the total mass of the Solar System.[20] Roughly three-quarters of the Sun's mass consists of hydrogen (~73%); the rest is mostly helium (~25%), with much smaller quantities of heavier elements, including oxygen, carbon, neon, and iron.[21]

The Sun is a G-type main-sequence star (G2V), informally called a yellow dwarf, though its light is actually white. It formed approximately 4.6 billion[a][14][22] years ago from the gravitational collapse of matter within a region of a large molecular cloud. Most of this matter gathered in the center, whereas the rest flattened into an orbiting disk that became the Solar System. The central mass became so hot and dense that it eventually initiated nuclear fusion in its core. It is thought that almost all stars form by this process.

Every second, the Sun's core fuses about 600 million tons of hydrogen into helium, and in the process converts 4 million tons of matter into energy. This energy, which can take between 10,000 and 170,000 years to escape the core, is the source of the Sun's light and heat. When hydrogen fusion in its core has diminished to the point at which the Sun is no longer in hydrostatic equilibrium, its core will undergo a marked increase in density and temperature while its outer layers expand, eventually transforming the Sun into a red giant. It is calculated that the Sun will become sufficiently large to engulf the current orbits of Mercury and Venus, and render Earth uninhabitable in five billion years. After this, it will shed its outer layers and become a dense type of cooling star known as a white dwarf, and no longer produce energy by fusion, but still glow and give off heat from its previous fusion.

The enormous effect of the Sun on Earth has been recognized since prehistoric times. The Sun was thought of by some cultures as a deity. The synodic rotation of Earth and its orbit around the Sun are the basis of some solar calendars. The predominant calendar in use today is the Gregorian calendar which is based upon the standard 16th-century interpretation of the Sun's observed movement as actual movement.",
                'image'         => 'assets/img/Sun.jpg',
            ],
            9 => [
                'id'            => 10,
                'category_id'   => 3,
                'name'          => 'Sirius',
                'short_description'   => "Sirius is the brightest star in the night sky. Its name is derived from the Greek word Σείριος, or Seirios, meaning lit. 'glowing' or 'scorching'. The star is designated α Canis Majoris, Latinized to Alpha Canis Majoris, and abbreviated α CMa or Alpha CMa.",
                'description' => "Sirius is the brightest star in the night sky. Its name is derived from the Greek word Σείριος, or Seirios, meaning lit. 'glowing' or 'scorching'. The star is designated α Canis Majoris, Latinized to Alpha Canis Majoris, and abbreviated α CMa or Alpha CMa. With a visual apparent magnitude of −1.46, Sirius is almost twice as bright as Canopus, the next brightest star. Sirius is a binary star consisting of a main-sequence star of spectral type A0 or A1, termed Sirius A, and a faint white dwarf companion of spectral type DA2, termed Sirius B. The distance between the two varies between 8.2 and 31.5 astronomical units as they orbit every 50 years.[25]

Sirius appears bright because of its intrinsic luminosity and its proximity to the Solar System. At a distance of 2.64 parsecs (8.6 ly), the Sirius system is one of Earth's nearest neighbours. Sirius is gradually moving closer to the Solar System; it is expected to increase in brightness slightly over the next 60,000 years to reach a peak magnitude of −1.68. Coincidentally, at about the same time, Sirius will take its turn as the southern Pole Star, around the year 66270. In that year, Sirius will come to within 1.6 degrees of the south celestial pole. This is due to precession and proper motion of Sirius itself which moves slowly in the SSW direction. So it will be visible from the southern hemisphere only. [26] After that time, its distance will begin to increase, and it will become fainter, but it will continue to be the brightest star in the Earth's night sky for approximately the next 210,000 years, at which point Vega, another A-type star that is intrinsically more luminous than Sirius, becomes the brightest star.[27]

Sirius A is about twice as massive as the Sun (M☉) and has an absolute visual magnitude of +1.43. It is 25 times as luminous as the Sun,[13] but has a significantly lower luminosity than other bright stars such as Canopus, Betelgeuse, or Rigel. The system is between 200 and 300 million years old.[13] It was originally composed of two bright bluish stars. The initially more massive of these, Sirius B, consumed its hydrogen fuel and became a red giant before shedding its outer layers and collapsing into its current state as a white dwarf around 120 million years ago.[13]

Sirius is colloquially known as the 'Dog Star'', reflecting its prominence in its constellation, Canis Major (the Greater Dog).[19] The heliacal rising of Sirius marked the flooding of the Nile in Ancient Egypt and the 'dog days' of summer for the ancient Greeks, while to the Polynesians, mostly in the Southern Hemisphere, the star marked winter and was an important reference for their navigation around the Pacific Ocean.",
                'image'         => 'assets/img/Sirius-BlueWhite.jpg',
            ],
            10 => [
                'id'            => 11,
                'category_id'   => 3,
                'name'          => 'Vega',
                'short_description'   => "Vega is the brightest star in the northern constellation of Lyra. It has the Bayer designation α Lyrae, which is Latinised to Alpha Lyrae and abbreviated Alpha Lyr or α Lyr. This star is relatively close at only 25 light-years from the Sun, and one of the most luminous stars in the Sun's neighborhood.",
                'description' => "Vega is the brightest star in the northern constellation of Lyra. It has the Bayer designation α Lyrae, which is Latinised to Alpha Lyrae and abbreviated Alpha Lyr or α Lyr. This star is relatively close at only 25 light-years (7.7 parsecs) from the Sun, and one of the most luminous stars in the Sun's neighborhood. It is the fifth-brightest star in the night sky, and the second-brightest star in the northern celestial hemisphere, after Arcturus.

Vega has been extensively studied by astronomers, leading it to be termed 'arguably the next most important star in the sky after the Sun'.[18] Vega was the northern pole star around 12,000 BCE and will be so again around the year 13,727, when its declination will be +86° 14′.[19] Vega was the first star other than the Sun to have its image and spectrum photographed.[20][21] It was one of the first stars whose distance was estimated through parallax measurements. Vega has functioned as the baseline for calibrating the photometric brightness scale and was one of the stars used to define the zero point for the UBV photometric system.

Vega is only about a tenth of the age of the Sun, but since it is 2.1 times as massive, its expected lifetime is also one tenth of that of the Sun; both stars are at present approaching the midpoint of their main sequence lifetimes. Compared with the Sun, Vega has a lower abundance of elements heavier than helium.[13] Vega is also a variable star that varies slightly in brightness. It is rotating rapidly with a velocity of 236 km/s at the equator. This causes the equator to bulge outward due to centrifugal effects, and, as a result, there is a variation of temperature across the star's photosphere that reaches a maximum at the poles. From Earth, Vega is observed from the direction of one of these poles.[22]

Based on an observed excess emission of infrared radiation, Vega appears to have a circumstellar disk of dust. This dust is likely to be the result of collisions between objects in an orbiting debris disk, which is analogous to the Kuiper belt in the Solar System.[23] Stars that display an infrared excess due to dust emission are termed Vega-like stars.[24] In 2021, a candidate ultra-hot Neptune on a 2.43-day orbit around Vega was discovered with the radial velocity method, additionally, another possible Saturn-mass signal with a period of about 200 days.",
                'image'         => 'assets/img/vega.jpg',
            ],
            11 => [
                'id'            => 12,
                'category_id'   => 4,
                'name'          => 'Moon',
                'short_description'   => "The Moon is Earth's only natural satellite. Its diameter is about one-quarter of Earth's, making it the fifth largest satellite in the Solar System and the largest and most massive relative to its parent planet. It is larger than all known dwarf planets in the Solar System.",
                'description' => "The Moon is Earth's only natural satellite. Its diameter is about one-quarter of Earth's (comparable to the width of Australia),[17] making it the fifth largest satellite in the Solar System and the largest and most massive relative to its parent planet.[f] It is larger than all known dwarf planets in the Solar System.[18] The Moon is a planetary-mass object with a differentiated rocky body, making it a satellite planet under the geophysical definitions of the term. It lacks any significant atmosphere, hydrosphere, or magnetic field. Its surface gravity is about one-sixth of Earth's at 0.1654 g—Jupiter's moon Io is the only satellite in the Solar System known to have a higher surface gravity and density.

The Moon orbits Earth at an average distance of 384,400 km (238,900 mi), or about 30 times Earth's diameter. Its gravitational influence is the main driver of Earth's tides and very slowly lengthens Earth's day. The Moon's orbit around Earth has a sidereal period of 27.3 days. During each synodic period of 29.5 days, the amount of visible surface illuminated by the Sun varies from none up to 100%, resulting in lunar phases that form the basis for the months of a lunar calendar. The Moon is tidally locked to Earth, which means that the length of a full rotation of the Moon on its own axis causes its same side (the near side) to always face Earth, and the somewhat longer lunar day is the same as the synodic period. Due to cyclical shifts in perspective (libration), 59% of the lunar surface is visible from Earth.

The most widely accepted origin explanation posits that the Moon formed 4.51 billion years ago, not long after Earth's formation, out of the debris from a giant impact between Earth and a hypothesized Mars-sized body called Theia. It receded to a wider orbit because of tidal interaction with the Earth. The near side of the Moon is marked by dark volcanic maria ('seas'), which fill the spaces between bright ancient crustal highlands and prominent impact craters. Most of the large impact basins and mare surfaces were in place by the end of the Imbrian period, some three billion years ago. Although the reflectance of the lunar surface is low (comparable to that of asphalt), its large angular diameter makes the full moon the brightest celestial object in the night sky. The Moon's apparent size is nearly the same as that of the Sun, allowing it to cover the Sun almost completely during a total solar eclipse.

Both the Moon's prominence in Earth's sky and its regular cycle of phases have provided cultural references and influences for human societies throughout history. Such influences can be found in language, calendar systems, art, and mythology. The first artificial object to reach the Moon was the Soviet Union's uncrewed Luna 2 spacecraft in 1959; this was followed by the first successful soft landing by Luna 9 in 1966. The only human lunar missions to date have been those of the United States' Apollo program, which landed twelve men on the surface between 1969 and 1972. These and later uncrewed missions returned lunar rocks that have been used to develop a detailed geological understanding of the Moon's origins, internal structure, and subsequent history. The Moon is the only celestial body visited by humans.",
                'image'         => 'assets/img/moon.jpg',
            ],
            12=> [
                'id'            => 13,
                'category_id'   => 4,
                'name'          => 'Titan (moon)',
                'short_description'   => "Titan is the largest moon of Saturn, the second-largest in the Solar System and larger than any of the dwarf planets of the Solar System. It is the only moon known to have a dense atmosphere, and is the only known object in space other than Earth on which clear evidence of stable bodies of surface liquid has been found.",
                'description' => "Titan is one of the seven gravitationally rounded moons in orbit around Saturn, and the second most distant from Saturn of those seven. Frequently described as a planet-like moon, Titan is 50% larger (in diameter) than Earth's Moon and 80% more massive. It is the second-largest moon in the Solar System after Jupiter's moon Ganymede, and is larger than the planet Mercury, but only 40% as massive.

Discovered in 1655 by the Dutch astronomer Christiaan Huygens, Titan was the first known moon of Saturn, and the sixth known planetary satellite (after Earth's moon and the four Galilean moons of Jupiter). Titan orbits Saturn at 20 Saturn radii. From Titan's surface, Saturn subtends an arc of 5.09 degrees, and if it were visible through the moon's thick atmosphere, it would appear 11.4 times larger in the sky, in diameter, than the Moon from Earth, which subtends 0.48° of arc.

Titan is primarily composed of ice and rocky material, which is likely differentiated into a rocky core surrounded by various layers of ice, including a crust of ice Ih and a subsurface layer of ammonia-rich liquid water.[16] Much as with Venus before the Space Age, the dense opaque atmosphere prevented understanding of Titan's surface until the Cassini–Huygens mission in 2004 provided new information, including the discovery of liquid hydrocarbon lakes in Titan's polar regions. The geologically young surface is generally smooth, with few impact craters, although mountains and several possible cryovolcanoes have been found.

The atmosphere of Titan is largely nitrogen; minor components lead to the formation of methane and ethane clouds and heavy organonitrogen haze. The climate—including wind and rain—creates surface features similar to those of Earth, such as dunes, rivers, lakes, seas (probably of liquid methane and ethane), and deltas, and is dominated by seasonal weather patterns as on Earth. With its liquids (both surface and subsurface) and robust nitrogen atmosphere, Titan's methane cycle bears a striking similarity to Earth's water cycle, albeit at the much lower temperature of about 94 K (−179 °C; −290 °F).",
                'image'         => 'assets/img/titan.jpg',
            ],
            13=> [
                'id'            => 14,
                'category_id'   => 5,
                'name'          => 'Comet Encke',
                'short_description'   => "Comet Encke, or Encke's Comet, is a periodic comet that completes an orbit of the Sun once every 3.3 years. Encke was first recorded by Pierre Méchain on 17 January 1786, but it was not recognized as a periodic comet until 1819 when its orbit was computed by Johann Franz Encke.",
                'description' => "Comet Encke /ˈɛŋki/, or Encke's Comet (official designation: 2P/Encke), is a periodic comet that completes an orbit of the Sun once every 3.3 years. (This is the shortest period of a reasonably bright comet; the faint main-belt comet 311P/PanSTARRS has a period of 3.2 years.) Encke was first recorded by Pierre Méchain on 17 January 1786,[7] but it was not recognized as a periodic comet until 1819 when its orbit was computed by Johann Franz Encke. Like Halley's Comet, it is unusual in its being named after the calculator of its orbit rather than its discoverer. Like most comets, it has a very low albedo, reflecting only 4.6% of the light its nucleus receives, although comets generate a large coma and tail that can make them much more visible during their perihelion (closest approach to the Sun). The diameter of the nucleus of Encke's Comet is 4.8 km.",
                'image'         => 'assets/img/Enckes-Comet-Spitzer-Space-Telescope.jpg',
            ],
            14=> [
                'id'            => 15,
                'category_id'   => 6,
                'name'          => 'Earth',
                'short_description'   => "",
                'description' => "Earth is the third planet from the Sun and the only place known in the universe where life has originated and found habitability. Earth is the only planet to sustain liquid surface water, with ocean water extending over 70.8% of the planet, making it an ocean world. Most of all other water is retained in Earth's polar regions, with large sheets of ice covering ocean and land, dwarfing Earth's groundwater, lakes, rivers and atmospheric water. The other 29.2% of the Earth's surface is land, consisting of continents and islands, and is widely covered by vegetation. Below the planet's surface lies the crust, consisting of several slowly moving tectonic plates, which interact to produce mountain ranges, volcanoes, and earthquakes. Inside the Earth's crust is a liquid outer core that generates the magnetosphere, deflecting most of the destructive solar winds and cosmic radiation.

Earth has a dynamic atmosphere, which sustains Earth's surface conditions and protects it from most meteoroids and UV-light at entry. It has a composition of primarily nitrogen and oxygen. Water vapor is widely present in the atmosphere, forming clouds that cover most of the planet. The water vapor acts as a greenhouse gas and, together with other greenhouse gases in the atmosphere, particularly carbon dioxide (CO2), creates the conditions for both liquid surface water and water vapor to persist via the capturing of energy from the Sun's light. This process maintains the current average surface temperature of 14.76 °C, at which water is liquid under atmospheric pressure. Differences in the amount of captured energy between geographic regions (as with the equatorial region receiving more sunlight than the polar regions) drive atmospheric and ocean currents, producing a global climate system with different climate regions, and a range of weather phenomena such as precipitation, allowing components such as nitrogen to cycle.

Earth is rounded into an ellipsoid with a circumference of about 40,000 km. It is the densest planet in the Solar System. Of the four rocky planets, it is the largest and most massive. Earth is about eight light-minutes away from the Sun and orbits it, taking a year (about 365.25 days) to complete one revolution. The Earth rotates around its own axis in slightly less than a day (in about 23 hours and 56 minutes). The Earth's axis of rotation is tilted with respect to the perpendicular to its orbital plane around the Sun, producing seasons. Earth is orbited by one permanent natural satellite, the Moon, which orbits Earth at 384,400 km (1.28 light seconds) and is roughly a quarter as wide as Earth. Through tidal locking, the Moon always faces the Earth with the same side, which causes tides, stabilizes Earth's axis, and gradually slows its rotation.

Earth, like most other bodies in the Solar System, formed 4.5 billion years ago from gas in the early Solar System. During the first billion years of Earth's history, the ocean formed and then life developed within it. Life spread globally and has been altering Earth's atmosphere and surface, leading to the Great Oxidation Event two billion years ago. Humans emerged 300,000 years ago in Africa and have spread across every continent on Earth with the exception of Antarctica. Humans depend on Earth's biosphere and natural resources for their survival, but have increasingly impacted the planet's environment. Humanity's current impact on Earth's climate and biosphere is unsustainable, threatening the livelihood of humans and many other forms of life, and causing widespread extinctions.",
                'image'         => 'assets/img/earth.jpg',
            ],

        ];
    }
    public function getAllEntities()
    {
        return $this->entities;
    }

    public function getAllCategoryEntity($id)
    {
        foreach ($this->entities as $entity)
        {
            if ($entity['category_id'] == $id)
            {
                array_push($this->data, $entity);
            }
        }
        return $this->data;
    }

    public function getEntityById($id)
    {
        foreach ($this->entities as $entity)
        {
            if ($entity['id'] == $id)
            {
                return $entity;
            }
        }
    }
}