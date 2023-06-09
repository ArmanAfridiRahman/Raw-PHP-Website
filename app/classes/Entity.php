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