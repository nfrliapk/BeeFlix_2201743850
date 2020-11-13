<?php

use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            'movie_id' => 1,
            'episode' => 'Episode 1',
            'title' => 'The Movie: Mugen Train'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 2,
            'episode' => 'Episode 1',
            'title' => 'Enola Holmes'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 3,
            'episode' => 'Episode 1',
            'title' => 'Ava'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 4,
            'episode' => 'Episode 1',
            'title' => 'Mulan'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 5,
            'episode' => 'Episode 1',
            'title' => 'Clouds'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 6,
            'episode' => 'Episode 1',
            'title' => 'We Bare Bears: The Movie'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 7,
            'episode' => 'Episode 1',
            'title' => 'Roald Dahls The Witches'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 8,
            'episode' => 'Episode 1',
            'title' => 'Over The Moon'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 9,
            'episode' => 'Episode 1',
            'title' => 'Coco'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 10,
            'episode' => 'Episode 1',
            'title' => 'Trolls World Tour'
        ]);
        
        //The World of the Married//
        DB::table('episodes')->insert([
            'movie_id' => 11,
            'episode' => 'Episode 1',
            'title' => 'Infidelity'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 11,
            'episode' => 'Episode 2',
            'title' => 'The Anger Builds'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 11,
            'episode' => 'Episode 3',
            'title' => 'Legal Advice'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 11,
            'episode' => 'Episode 4',
            'title' => 'Red Lipstick'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 11,
            'episode' => 'Episode 5',
            'title' => 'The Unexpected Dinner'
        ]);
    

        //The Queen's Gambit//
        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episode' => 'Episode 1',
            'title' => 'Openings'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episode' => 'Episode 2',
            'title' => 'Exchanges'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episode' => 'Episode 3',
            'title' => 'Doubled Pawns'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episode' => 'Episode 4',
            'title' => 'Middle Game'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 12,
            'episode' => 'Episode 5',
            'title' => 'Adjournment'
        ]);

        //Money Heist//
        DB::table('episodes')->insert([
            'movie_id' => 13,
            'episode' => 'Episode 1',
            'title' => 'Episode 1'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 13,
            'episode' => 'Episode 2',
            'title' => 'Episode 2'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 13,
            'episode' => 'Episode 3',
            'title' => 'Episode 3'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 13,
            'episode' => 'Episode 4',
            'title' => 'Episode 4'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 13,
            'episode' => 'Episode 5',
            'title' => 'Episode 5'
        ]);

        //Lucifer//
        DB::table('episodes')->insert([
            'movie_id' => 14,
            'episode' => 'Episode 1',
            'title' => 'Pilot'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 14,
            'episode' => 'Episode 2',
            'title' => 'Lucifer, Stay. Good Devil.'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 14,
            'episode' => 'Episode 3',
            'title' => 'The Would-Be Prince of Darkness'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 14,
            'episode' => 'Episode 4',
            'title' => 'Manly Whatnots'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 14,
            'episode' => 'Episode 5',
            'title' => 'Sweet Kicks'
        ]);

        //Game of Thrones//
        DB::table('episodes')->insert([
            'movie_id' => 15,
            'episode' => 'Episode 1',
            'title' => 'Winter Is Coming'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 15,
            'episode' => 'Episode 2',
            'title' => 'The Kingsroad'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 15,
            'episode' => 'Episode 3',
            'title' => 'Lord Snow'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 15,
            'episode' => 'Episode 4',
            'title' => '
            Cripples, Bastards, and Broken Things'
        ]);

        DB::table('episodes')->insert([
            'movie_id' => 15,
            'episode' => 'Episode 5',
            'title' => 'The Wolf and the Lion'
        ]);
    }
}
