<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_games_table extends Seeder
{
    /**
     * Run the database seeds to insert data in games table.
     *
     * @return void
     */
    public function run()
    {
        $slug = str::slug('Assassins Creed', '-');
        DB::table('games')->insert(
            [
                'title' => 'Assassins Creed',
                'slug' => $slug,
                'developer' => 'UBI Soft',
                'latest_version' => 'Assassin\'s Creed Valhalla',
                'status' => 'Yet to Release',
                'summary' => 'Assassin\'s Creed Valhalla is the latest version of the franchise that is about to be releaed and will be twelth game of the series.',
                'description' => 'Assassin\'s Creed is an action-adventure stealth video game franchise published by Ubisoft and developed mainly by its studio Ubisoft Montreal using the game engine Anvil and its more advanced derivatives. Created by Patrice Désilets, Jade Raymond, and Corey May, the Assassin\'s Creed series depicts a fictional millennia-old struggle between the Assassins, who fight for peace with free will, and the Templars, who desire peace through order and control. The series features historical fiction, science fiction and characters, intertwined with real-world historical events and figures. For the majority of time players control an Assassin in the past history, while they also play as Desmond Miles or an Assassin Initiate in the present day, who hunt down their Templar targets. The franchise centers on a video game franchise published by Ubisoft and developed mainly by its studio Ubisoft Montreal. The genre of the main games in the series is an open-world action-adventure stealth using the game engine Anvil and its more advanced derivatives. The series took inspiration from the novel Alamut by the Slovenian writer Vladimir Bartol,[1] while building upon concepts from the Prince of Persia series.',
                'image' => 'assassin_creed.jpg',
                'price' => '30',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ]
        );

        $slug = str::slug('Batman Arkham', '-');
        DB::table('games')->insert(
            [
                'title' => 'Batman Arkham',
                'slug' => $slug,
                'developer' => 'Rocksteady Studios',
                'latest_version' => 'Batman Arkham Knight',
                'status' => 'Released',
                'summary' => 'Batman Arkham Knight is the sequel to Arkham City and the biggest installment in the series; it was intended to be the final Batman: Arkham game',
                'description' => 'Batman: Arkham is a series of action-adventure video games based on the DC Comics character Batman, developed by Rocksteady Studios and WB Games Montreal, and published by Warner Bros. Interactive Entertainment. The first two Rocksteady games were written by veteran Batman writer Paul Dini and featured voice actors Kevin Conroy and Mark Hamill reprising their roles as Batman and the Joker, respectively, from the DC Animated Universe (DCAU). Conroy and Hamill returned to voice their characters in the fourth main installment of the series, Batman: Arkham Knight. The franchise consists of four main titles, with additional mobile games, and a virtual reality game, Batman: Arkham VR. A spin-off, Suicide Squad: Kill the Justice League, also developed by Rocksteady, is set to be released in 2022. The continuity established by the games is often referred to as the "Arkhamverse", and is part of the larger DC Multiverse.',
                'image' => 'batman_arkham.jpg',
                'price' => '27',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ]
        );

        $slug = str::slug('Counter Strike', '-');
        DB::table('games')->insert(
            [
                'title' => 'Counter Strike',
                'slug' => $slug, 
                'developer' => 'Minh Le &amp; Jess Cliffe',
                'latest_version' => 'Global Offensive',
                'status' => 'Released',
                'summary' => 'Counter-Strike: Global Offensive was the fourth release in the main, Valve-developed Counter-Strike series in 2012. Much like Counter-Strike: Source the game runs on the Source engine.',
                'description' => 'Counter-Strike (CS) is a series of multiplayer first-person shooter video games in which teams of terrorists battle to perpetrate an act of terror (bombing, hostage-taking, assassination) while counter-terrorists try to prevent it (bomb defusal, hostage rescue). The series began on Windows in 1999 with the release of the first game, Counter-Strike. It was initially released as a modification ("mod") for Half-Life that was designed by Minh "Gooseman" Le and Jess "Cliffe" Cliffe before the rights to the mod\'s intellectual property were acquired by Valve, the developers of Half-Life, who then turned Counter-Strike into a retail product.
                    The original Counter-Strike was followed by Counter-Strike: Condition Zero, developed by Turtle Rock Studios and released in March 2004. A previous version of Condition Zero that was developed by Ritual Entertainment was released alongside it as Condition Zero: Deleted Scenes. Eight months later, Valve released Counter-Strike: Source, a remake of the original Counter-Strike and the first in the series to run on Valve\'s newly created Source engine. The fourth game in the main series, Counter-Strike: Global Offensive, was released by Valve in 2012 for Windows, OS X, Xbox 360, and PlayStation 3. Hidden Path Entertainment, who worked on Counter-Strike: Source post-release, helped to develop the game alongside Valve.',
                'image' => 'counter_strike.jpg',
                'price' => '10',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ]
        );

        $slug = str::slug('PlayerUnknown\'s Battlegrounds', '-');
        DB::table('games')->insert(
            [
                'title' => 'PlayerUnknown\'s Battlegrounds',
                'slug' => $slug,
                'developer' => 'Bluehole',
                'latest_version' => 'PlayerUnknown\'s Battlegrounds',
                'status' => 'Released',
                'summary' => 'Battlegrounds is a player versus player shooter game in which up to one hundred players fight in a battle royale, a type of large-scale last man standing deathmatch where players fight to remain the last alive. Players can choose to enter the match solo, duo, or with a small team of up to four people. The last person or team alive wins the match.',
                'description' => 'PlayerUnknown\'s Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. The game is based on previous mods that were created by Brendan "PlayerUnknown" Greene for other games, inspired by the 2000 Japanese film Battle Royale, and expanded into a standalone game under Greene\'s creative direction. In the game, up to one hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding getting killed themselves. The available safe area of the game\'s map decreases in size over time, directing surviving players into tighter areas to force encounters. The last player or team standing wins the round.
                Battlegrounds was first released for Microsoft Windows via Steam\'s early access beta program in March 2017, with a full release in December 2017. The game was also released by Microsoft Studios for the Xbox One via its Xbox Game Preview program that same month, and officially released in September 2018. A free-to-play mobile game version for Android and iOS was released in 2018, in addition to a port for the PlayStation 4. A version for the Stadia streaming platform was released in April 2020. Battlegrounds is one of the best-selling and most-played video games of all time. The game has sold over 70 million copies on personal computers and game consoles as of 2020, in addition to PUBG Mobile accumulating 734 million downloads and grossing over $3.5 billion on mobile devices.',
                'image' => 'playerunknowns_battlegrounds.jpg',
                'price' => '20',
                'category_id' => '2',
                'created_at' => Carbon::now()
            ]
        );

        $slug = str::slug('Need For Speed', '-');
        DB::table('games')->insert(
            [
                'title' => 'Need For Speed',
                'slug' => $slug,
                'developer' => 'Criterion Games',
                'latest_version' => 'Need For Speed Heat',
                'status' => 'Yet to Release',
                'summary' => 'In 2019, Electronic Arts announced that a new Need for Speed installment is in development. In July, Electronic Arts stated that the new Need for Speed installment will be released before the end of March 2020. On August 14, the game was announced as Need for Speed Heat and was released on November 8, 2019.',
                'description' => 'Need for Speed (NFS) is a racing video game franchise published by Electronic Arts and currently developed by Criterion Games, the developers of Burnout. The series centers around illicit street racing and in general tasks players to complete various types of races while evading the local law enforcement in police pursuits. The series released its first title, The Need for Speed, in 1994. The most recent game, Need for Speed Heat, was released on November 8, 2019.
                The series has been overseen and had games developed by multiple notable teams over the years including EA Canada, EA Black Box, Slightly Mad Studios, and Ghost Games. The franchise has been critically well received and is one of the most successful video game franchises of all time, selling over 150 million copies of games. Due to its strong sales, the franchise has expanded into other forms of media including a film adaptation and licensed Hot Wheels toys.',
                'image' => 'need_for_speed.jpg',
                'price' => '55',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ]
        );

        $slug = str::slug('Dirt', '-');
        DB::table('games')->insert(
            [
                'title' => 'Dirt',
                'slug' => $slug,
                'developer' => 'Codemasters',
                'latest_version' => 'Dirt 5',
                'status' => 'Yet to Release',
                'summary' => 'In May 2020, Codemasters announced Dirt 5. The game is scheduled to be launched in November 2020 on Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One and Xbox Series X.',
                'description' => 'Dirt is a racing video game series developed and published by Codemasters. The series started in June 2007, when Codemasters changed the naming scheme in their previous Colin McRae Rally series of games, making Colin McRae Rally 2005 the last game in that series. The first Dirt game was the last one to be published before Colin McRae\'s death in September 2007. After that, Codemasters used his name one more time in Colin McRae: Dirt 2, finally dropping the moniker in Dirt 3.',
                'image' => 'dirt.jpg',
                'price' => '61',
                'category_id' => '3',
                'created_at' => Carbon::now()
            ]
        );

        $slug = str::slug('Resident Evil', '-');
        DB::table('games')->insert(
            [
                'title' => 'Resident Evil',
                'slug' => $slug,
                'developer' => 'Capcom',
                'latest_version' => 'Resident Evil 3',
                'status' => 'Released',
                'summary' => 'Resident Evil 3 is a survival horror game developed and published by Capcom. It is a remake of Resident Evil 3: Nemesis (1999) and follows Jill Valentine and Carlos Oliveira as they attempt to survive a zombie apocalypse while being hunted by the intelligent bioweapon Nemesis.',
                'description' => 'Resident Evil, known in Japan as Biohazard, is a Japanese horror media franchise created by Shinji Mikami and Tokuro Fujiwara, and owned by the video game company Capcom. The franchise focuses on a series of video games and includes live-action films, animated films, comic books, novels, audio dramas, and merchandise. The story follows outbreaks of zombies and other monsters created mainly by the Umbrella Corporation.
                The franchise began with the game Resident Evil, released in 1996 for the PlayStation, and is credited for defining the survival horror genre and returning zombies to popular culture. With Resident Evil 4 (2005), the franchise shifted to more dynamic shooting action; it influenced the evolution of the survival horror and third-person genres, popularizing the "over-the-shoulder" third-person view. Resident Evil 7: Biohazard (2017) returned to the survival horror mood and moved to a first-person perspective.',
                'image' => 'resident_evil.jpg',
                'price' => '80',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ]
        );

        $slug = str::slug('Layers of Fear', '-');
        DB::table('games')->insert(
            [
                'title' => 'Layers of Fear',
                'slug' => $slug,
                'developer' => 'Bloober Team',
                'latest_version' => 'Layers of Fear 2',
                'status' => 'Released',
                'summary' => 'Layers of Fear is a psychological horror video game developed by Bloober Team and published by Aspyr. It was released on Linux, Microsoft Windows, OS X, PlayStation 4, and Xbox One worldwide in February 2016.',
                'description' => 'Most games can make you jump, they can make scream, but few can make you doubt yourself in real life. Layers of Fear initially appears very familiar as you explore a spooky, creepy and cavernously empty house. The Gothic story unravels slowly as you play an unnamed artist returning home. It soon becomes clear though that madness has overtaken the painter and it expresses itself in the unreliable narration of the physical world. Doors disappear and corridors warp out of shape just in the corner of you; the game rearranges itself in such away to recreate the main character\'s madness that only a few hours in and you\'ll find yourself questioning everything. Was that desk on that side of the room last time you looked? Are you sure? Add to that the nature of the protagonist\'s illness - an obsessional painting made from... less than savoury materials, and you have on of the greatest horror games of all time.',
                'image' => 'layers_of_fear.jpg',
                'price' => '20',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ]
        );

        $slug = str::slug('Age of Empires', '-');
        DB::table('games')->insert(
            [
                'title' => 'Age of Empires',
                'slug' => $slug,
                'developer' => 'Relic Entertainment',
                'latest_version' => 'Age of Empires IV',
                'status' => 'Released',
                'summary' => 'On August 21, 2017, Microsoft announced Age of Empires IV, developed by Relic Entertainment. Microsoft\'s Executive Vice-President of Gaming, Phil Spencer, confirmed on June 11, 2019, that Age of Empires IV is still in development, with more information coming later in 2019.',
                'description' => 'Age of Empires is a series of historical real-time strategy video games, originally developed by Ensemble Studios and published by Xbox Game Studios. The first game was Age of Empires, released in 1997. Eight total games within the series have been released.
                Age of Empires focused on events in Europe, Africa and Asia, spanning from the Stone Age to the Iron Age; the expansion game explored the formation and expansion of the Roman Empire. The sequel, Age of Empires II: The Age of Kings, was set in the Middle Ages, while its expansion focused partially on the Spanish conquest of Mexico.',
                'image' => 'age_of_empires.jpg',
                'price' => '15',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ]
        );

        $slug = str::slug('Civilization', '-');
        DB::table('games')->insert(
            [
                'title' => 'Civilization',
                'slug' => $slug,
                'developer' => 'Firaxis Games',
                'latest_version' => 'New Frontier',
                'status' => 'Yet to Release',
                'summary' => 'Firaxis announced in May 2020 a "New Frontier" season pass for the game, consisting of six total content packs, each to release every other month starting in May through March 2021. A total of nine new leaders and eight new civilizations will be added through the six packs, as well as new gameplay modes and additional features such as new wonders and buildings.',
                'description' => 'Sid Meier\'s Civilization is a turn-based strategy 4X video game developed by Firaxis Games, published by 2K Games, and distributed by Take-Two Interactive.
                The goal for the player is to develop a civilization from an early settlement through many millennia to become a world power and achieve one of several victory conditions, such as through military domination, technological superiority, or cultural influence, over the other human and computer-controlled opponents. Players do this by exploring the world, founding new cities, building city improvements, deploying military troops to attack and defend from others, researching new technologies and cultural civics, and engaging in trade and negotiations with other world leaders.',
                'image' => 'civilisation.jpg',
                'price' => '27',
                'category_id' => '5',
                'created_at' => Carbon::now()
            ]
        );

        $slug = str::slug('Thief', '-');
        DB::table('games')->insert(
            [
                'title' => 'Thief',
                'slug' => $slug,
                'developer' => 'Looking Glass Studios',
                'latest_version' => 'Thief',
                'status' => 'Released',
                'summary' => 'Thief is the fourth game in the Thief series, developed by Eidos Montréal and published by Square Enix. Since early 2008, several rumors had been circulating regarding a fourth Thief game, which was allegedly under development.',
                'description' => 'Garrett, the Master Thief, steps out of the shadows into the City. In this treacherous place, where the Baron’s Watch spreads a rising tide of fear and oppression, his skills are the only things he can trust.
                Even the most cautious citizens and their best-guarded possessions are not safe from his reach. As an uprising emerges, Garrett finds himself entangled in growing layers of conflict. Lead by Orion, the voice of the people, the tyrannized citizens will do everything they can to claim back the City from the Baron’s grasp. The revolution is inevitable. If Garrett doesn’t get involved, the streets will run red with blood and the City will tear itself apart.',
                'image' => 'thief.jpg',
                'price' => '19',
                'category_id' => '1',
                'created_at' => Carbon::now()
            ]
        );

        $slug = str::slug('Prototype', '-');
        DB::table('games')->insert(
            [
                'title' => 'Prototype',
                'slug' => $slug,
                'developer' => 'Radical Entertainment',
                'latest_version' => 'Prototype 2',
                'status' => 'Released',
                'summary' => 'Prototype 2 was released on April 24, 2012 for the PlayStation 3 and Xbox 360, and on July 24, 2012 in North America and July 30, 2012 in Europe for Windows. Prototype 2 takes place three years after the events of the first game and stars a new protagonist, U.S. Marine Sergeant James Heller. Alex Mercer, on the other hand, becomes the franchise\'s main antagonist.',
                'description' => 's an open world action-adventure video game developed by Radical Entertainment and published by Activision. The game was released in North America on June 9, 2009 (PlayStation 3 and Xbox 360), in southwestern parts of North America (Microsoft Windows) as well as Oceania on June 10, and in Europe on June 12. Versions for PlayStation 4 and Xbox One were released on July 14, 2015 alongside the sequel as Prototype Biohazard Bundle. Separate versions of the games became available in August 2015.
                Set in Manhattan, the game follows a powerful amnesiac shapeshifter named Alex Mercer who must stop an outbreak of Blacklight, a plague that mutates individuals into hideous violent monsters. During his quest, Alex tries to uncover his past while also coming into conflict with both the US military and a black operations force called Blackwatch. Parallel to the game\'s storyline is the ability to play the game as a sandbox-style video game giving the player freedom to roam Manhattan.',
                'image' => 'prototype.jpg',
                'price' => '25',
                'category_id' => '4',
                'created_at' => Carbon::now()
            ]
        );
    }
}
