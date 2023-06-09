<?php

namespace App\classes;

class Spacex
{
    public $spacex = [], $latestNews = [];

    public function __construct()
    {
        $this->spacex = [
            0 => [
                'id' => 1,
                'name' => 'Space Exploration Technologies Corporation',
                'logo' => 'assets/img/home/about/SpaceX.png',
                'description' => "The Space Exploration Technologies Corporation, commonly referred to as SpaceX[7] is an American spacecraft manufacturer, launcher, and satellite communications company headquartered in Hawthorne, California. It was founded in 2002 by Elon Musk with the goal of reducing space transportation costs to colonization of Mars. The company manufactures the Falcon 9, Falcon Heavy, and Starship heavy-lift launch vehicles as well as rocket engines, the Cargo Dragon and Crew Dragon spacecraft; and the Starlink mega-constellation satellite.

SpaceX offers commercial satellite-based internet service via its constellation of Starlink satellites, which became the largest-ever satellite constellation in January 2020 and as of December 2022 comprised more than 3,300 small satellites in orbit.[8]

The company is also developing Starship, a privately funded, fully reusable, super heavy-lift launch system for interplanetary and orbital spaceflight. On its failed first flight in April 2023, it became the largest and most powerful rocket ever flown. Starship is intended to become SpaceX's primary orbital vehicle, supplanting the existing Falcon 9, Falcon Heavy, and Dragon fleet.

SpaceX is the first private company to develop a liquid-propellant rocket that has reached orbit; to launch, orbit, and recover a spacecraft; to send a spacecraft to the International Space Station; and to send astronauts to orbit and to the International Space Station. It is also the first organization of any type to achieve a vertical propulsive landing of an orbital rocket booster and the first to reuse such a booster. SpaceX's Falcon 9 rockets have landed and reflown more than 150 times.[9]",
                'image' => 'assets/img/spacexBuildin.jpg'
            ]
        ];

        $this->latestNews = [
            0 => [
                'id' => 1,
                'title' => 'SpaceX Dragon breaks 2 space shuttle orbital records',
                'short_description' => "Dragon has now launched toward the space station more times than NASA's space shuttles did.",
                'description' => "SpaceX's Dragon capsule is now flying in very rarefied air indeed.

Dragon has set multiple American spaceflight records during its latest mission, a robotic resupply run to the International Space Station (ISS) for NASA that lifted off on Monday (June 5) and arrived at the orbiting lab Tuesday morning (June 6).

This is the 38th mission to the ISS to date for a SpaceX capsule, besting the 37 such flights that NASA's space shuttle orbiters racked up, SpaceX noted on Twitter Wednesday (June 7).  
And that's not all.

On Tuesday, 'the Dragon 2 fleet's cumulative time in space surpassed the space shuttle fleet's time with 1,324 total days in orbit!' SpaceX added in another Wednesday tweet. 

Dragon 2 is the latest iteration of the reusable capsule, which SpaceX began flying in 2020. There are crewed and uncrewed Dragon 2 variants. Crew Dragon has now flown 10 astronaut missions, most of them six-month trips to the ISS for NASA. 

The current resupply mission, known as CRS-28, is the eighth for the cargo version of Dragon 2. Such robotic cargo runs tend to last three to four weeks apiece. 

In addition, the earlier Dragon 1 cargo capsule launched 22 times between December 2010 and March 2020, making it to the ISS on 20 occasions. (The first flight, in December 2010, was a test to Earth orbit that did not attempt a rendezvous with the orbiting lab. SpaceX also suffered a launch failure during a robotic ISS resupply mission in June 2015.)
NASA flew five different space shuttle orbiters on a total of 135 missions from 1981 until the program's end in 2011. Two of those vehicles were lost, along with their seven-astronaut crews, in tragic accidents: Challenger in January 1986 and Columbia in February 2003.

The space shuttles helped build the ISS, which did not host its first astronauts until November 2000. The orbiting lab has been continuously occupied by rotating crews ever since.

Unlike Dragon, there was no uncrewed variant of the space shuttle; the iconic winged vehicle was designed to be piloted by people.",
                'image' => 'assets/img/spacex-latest-1.jpg'
            ],
            1 => [
                'id' => 2,
                'title' => "Space Force assigns 12 national security missions to SpaceX and ULA",
                'short_description' => "The Space Systems Command’s launch procurement office ordered six new missions from each company",
                'description' => "WASHINGTON — The U.S. Space Force launch procurement office on June 8 announced an additional 12 missions assigned to SpaceX and United Launch Alliance under the National Security Space Launch Phase 2 contract.

The 12 missions are projected to start launching in 2025.

SpaceX was assigned five Space Development Agency (SDA) launches to low Earth orbit and a U.S. Space Force classified mission, USSF-31.

SDA is building a large constellation of communications and missile-tracking sensor satellites that will be launched in batches. 

ULA was assigned two SDA launches; two National Reconnaissance Office missions, NROL-64 and NROL-83; the eighth Global Positioning System GPS 3; and the U.S. Space Force USSF-114 classified mission. 

The Space Systems Command’s program executive office for assured access to space, which oversees the NSSL program, in 2020 awarded ULA and SpaceX five-year contracts to launch as many as 40 missions. ULA won 60% of the missions and SpaceX 40%. 

To date only one NSSL mission under the Phase 2 contract has been launched by SpaceX in January. SpaceX also launched a mission in April for the Space Development Agency but that was purchased as a commercial launch contract, not under NSSL. 

Waiting for Vulcan

ULA was expected to launch its first NSSL Phase 2 mission later this year but that now appears unlikely as the company’s Vulcan Centaur rocket has yet to perform its first flight. Vulcan has to launch two successful orbital missions to get certified for NSSL. 

On June 7 ULA completed Vulcan Centaur’s static-fire test, one of the final milestones before the vehicle’s first launch.

To date, ULA has been assigned 15 missions and SpaceX 12 missions under the Phase 2 contract. 

“ULA and SpaceX continue to provide outstanding launch services with their reliable and innovative launch systems, and we are confident in their ability to maintain the unprecedented 100 percent program success for the NSSL missions assigned for launch in Fiscal Year 2025.” said Col. Chad Melone, chief of the launch procurement and integration division at Space Systems Command.  

GAO’s take on NSSL

In a report released June 8, the Government Accountability Office noted that the NSSL program office continues to order launch services from ULA and SpaceX amid concerns about Vulcan’s delays. 

“ULA delayed the first certification flight of the Vulcan launch system … to accommodate challenges with the BE-4 engine and a delayed commercial payload, nearly two years later than originally planned,” said GAO. “In the event that Vulcan is unavailable for future missions, program officials stated that the Phase 2 contract allows for the ability to reassign missions to the other provider.”",
                'image' => 'assets/img/spacex-latest-2.jpg'
            ],
            2 => [
                'id' => 3,
                'title' => 'NASA concerned Starship problems will delay Artemis 3',
                'short_description' => "WASHINGTON — NASA has growing concerns that the lunar lander version of SpaceX’s Starship vehicle will not be ready in time for the Artemis 3 mission in late 2025, given the amount of work needed to get the vehicle ready.",
                'description' => "Speaking at a joint meeting of the National Academies’ Aeronautics and Space Engineering Board and Space Studies Board June 7, Jim Free, NASA associate administrator for exploration systems development, said Artemis 3, which would feature the first human landing on the moon in more than half a century, was in danger of being delayed from December 2025 to some time in 2026.

Free said NASA’s concern is the number of launches of Starship that SpaceX has to carry out to be ready for Artemis 3. Each Starship lander mission requires launching the Starship lander itself as well as several “tanker” Starships to fuel the lander in Earth orbit before it goes to the moon. Before Artemis 3, SpaceX will carry out an uncrewed Starship lunar landing, and also must demonstrate cryogenic fluid transfer in Earth orbit.

“That’s a lot of launches to get those missions done,” Free said. “They have a significant number of launches to go, and that, of course, gives me concern about the December of 2025 date” for Artemis 3.

He reiterated those schedule concerns later in the meeting when asked about the schedule for Artemis 3. “With the difficulties that SpaceX has had, I think that’s really concerning,” he said. “You can think about that slipping probably into ’26.”

He didn’t elaborate on the “difficulties” that SpaceX has encountered, but the company’s Starship/Super Heavy launch vehicle is currently grounded after its first integrated launch April 20. The vehicle suffered several engine failures in flight and was destroyed by its flight termination system four minutes after liftoff.

NASA has personnel involved in the investigation of the launch, and Free said he had just met with a Federal Aviation Administration official about it. “They’re doing everything they can, but they look at the launch license for the next mission,” he said of the FAA. “What I tried to convey to him is our big picture of everything that’s going to take to get to that human lander.”

Neither the FAA nor SpaceX has provided public updates on the status of that investigation or when the company might be cleared to make another launch attempt. SpaceX Chief Executive Elon Musk said in an April 29 online discussion that the company could be ready in as soon as a “couple months,” but that schedule appears unlikely based on visible progress at the company’s Starbase test site in Boca Chica, Texas.

Regarding development of the lunar lander version of Starship, Free said that SpaceX and NASA have delayed a critical design review of the vehicle until after the company performs a cryogenic refueling demonstration in Earth orbit. The company provided NASA with an updated schedule last week, details of which he did not disclose, that the agency is reviewing.

“I get a lot of questions, ‘Will you make the date?’ Well, they need to get flying before we can get any kind of assessment,” he concluded.

He said he was confident that SpaceX would ultimately deliver the Starship lander, and noted that the fixed-price structure of the Human Landing System award shields NASA from additional costs. “But, the fact is, if they’re not flying on the time they’ve said, it does us no good to have a firm fixed price contract other than we’re not paying more.”",
                'image' => 'assets/img/spacex-latest-3.jpg'
            ],

        ];
    }

    public function getSpacex(){
        return $this->spacex;
    }
    public function getLatestNews(){
        return $this->latestNews;
    }
    public function getNewsById($id)
    {
        foreach ($this->latestNews as $news)
        {
            if ($news['id'] == $id)
            {
                return $news;
            }
        }
    }
}