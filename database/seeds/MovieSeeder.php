<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DRAMA*/
        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "Demon Slayer: Kimetsu no Yaiba",
            'photo' => "demonslayer.jpg",
            'desc' => "Tanjirō Kamado, joined with Inosuke Hashibira, a boy raised by boars who wears a boar's head, and Zenitsu Agatsuma, a scared boy who reveals his true power when he sleeps, boards the Infinity Train on a new mission with the Fire Hashira, Kyōjurō Rengoku, to defeat a demon who has been tormenting the people and killing the demon slayers who oppose it!",
            'rating' => "4.9"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "Enola Holmes",
            'photo' => "enolaholmes.jpg",
            'desc' => "While searching for her missing mother, intrepid teen Enola Holmes uses her sleuthing skills to outsmart big brother Sherlock and help a runaway lord.",
            'rating' => "4.4"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "Ava",
            'photo' => "ava.jpg",
            'desc' => "A black ops assassin is forced to fight for her own survival after a job goes dangerously wrong.",
            'rating' => "2.8"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "Mulan",
            'photo' => "mulan.jpg",
            'desc' => "When the Emperor of China issues a decree that one man per family must serve in the Imperial Chinese Army to defend the country from Huns, Hua Mulan, the eldest daughter of an honored warrior, steps in to take the place of her ailing father. She is spirited, determined and quick on her feet. Disguised as a man by the name of Hua Jun, she is tested every step of the way and must harness her innermost strength and embrace her true potential.",
            'rating' => "3.0"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => "Clouds",
            'photo' => "clouds.jpg",
            'desc' => "Young musician Zach Sobiech discovers his cancer has spread, leaving him just a few months to live. With limited time, he follows his dream and makes an album, unaware that it will soon be a viral music phenomenon.",
            'rating' => "4.9"
        ]);

        /*KIDS*/
        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "We Bare Bears: The Movie",
            'photo' => "webarebears.jpg",
            'desc' => "When Grizz, Panda, and Ice Bear's love of food trucks and viral videos get out of hand, the brothers are chased away from their home and embark on a trip to Canada, where they can live in peace.",
            'rating' => "4.8"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Roald Dahl's The Witches",
            'photo' => "roaldwitches.jpg",
            'desc' => "In late 1967, a young orphaned boy goes to live with his loving grandma in the rural Alabama town of Demopolis. As the boy and his grandmother encounter some deceptively glamorous but thoroughly diabolical witches, she wisely whisks him away to a seaside resort. Regrettably, they arrive at precisely the same time that the world's Grand High Witch has gathered.",
            'rating' => "3.2"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Over The Moon",
            'photo' => "overthemoon.jpg",
            'desc' => "A girl builds a rocket to travel to the moon in hopes of meeting the legendary Moon Goddess.",
            'rating' => "4.5"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Coco",
            'photo' => "coco.jpg",
            'desc' => "Despite his family’s baffling generations-old ban on music, Miguel dreams of becoming an accomplished musician like his idol, Ernesto de la Cruz. Desperate to prove his talent, Miguel finds himself in the stunning and colorful Land of the Dead following a mysterious chain of events. Along the way, he meets charming trickster Hector, and together, they set off on an extraordinary journey to unlock the real story behind Miguel's family history.",
            'rating' => "4.8"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => "Trolls World Tour",
            'photo' => "trolls.jpg",
            'desc' => "Queen Poppy and Branch make a surprising discovery — there are other Troll worlds beyond their own, and their distinct differences create big clashes between these various tribes. When a mysterious threat puts all of the Trolls across the land in danger, Poppy, Branch, and their band of friends must embark on an epic quest to create harmony among the feuding Trolls to unite them against certain doom.",
            'rating' => "4.0"
        ]);

        /*TV SHOW*/
        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "The World of the Married",
            'photo' => "twotm.jpg",
            'desc' => "A story about a married couple whose betrayal of one another leads to a whirlwind of revenge.",
            'rating' => "4.8"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "The Queen's Gambit",
            'photo' => "queengambit.jpg",
            'desc' => "In a Kentucky orphanage in the 1950s, a young girl discovers an astonishing talent for chess while struggling with addiction.",
            'rating' => "4.9"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "Money Heist",
            'photo' => "moneyheist.jpg",
            'desc' => "To carry out the biggest heist in history, a mysterious man called The Professor recruits a band of eight robbers who have a single characteristic: none of them has anything to lose. Five months of seclusion - memorizing every step, every detail, every probability - culminate in eleven days locked up in the National Coinage and Stamp Factory of Spain, surrounded by police forces and with dozens of hostages in their power, to find out whether their suicide wager will lead to everything or nothing.",
            'rating' => "4.8"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "Lucifer",
            'photo' => "lucifer.jpg",
            'desc' => "Bored and unhappy as the Lord of Hell, Lucifer Morningstar abandoned his throne and retired to Los Angeles, where he has teamed up with LAPD detective Chloe Decker to take down criminals. But the longer he's away from the underworld, the greater the threat that the worst of humanity could escape..",
            'rating' => "4.9"
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => "Game of Thrones",
            'photo' => "got.jpg",
            'desc' => "Seven noble families fight for control of the mythical land of Westeros. Friction between the houses leads to full-scale war. All while a very ancient evil awakens in the farthest north. Amidst the war, a neglected military order of misfits, the Night's Watch, is all that stands between the realms of men and icy horrors beyond.",
            'rating' => "4.6"
        ]);
        
        
    }
}
