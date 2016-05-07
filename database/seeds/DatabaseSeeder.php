<?php

use Illuminate\Database\Seeder;
use App\News;
use App\Quest;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('NewsTableSeeder');
        //$this->call('QuestTableSeeder');
    }
};

class QuestTableSeeder extends Seeder {

    public function run()
    {
        DB::table('quests')->delete();

        Quest::create(array(
            'user_id' => '955469181168026',
        	'game'=>'HS',
        	'desc'=>'asdasdasdasdasdasd',
        	'pct'=>'10'));
       
        Quest::create(array(
            'user_id' => '955469181168026',
        	'game'=>'HS',
        	'desc'=>'zzzz',
        	'pct'=>'110'));
        
        Quest::create(array(
            'user_id' => '955469181168026',
        	'game'=>'CSGO',
        	'desc'=>'cxcsd',
        	'pct'=>'140'));

        Quest::create(array(
            'user_id' => '955181168026',
        	'game'=>'HS',
        	'desc'=>'asdasdasdasdasdasd',
        	'pct'=>'10'));
    }

};	

class NewsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('news')->delete();

        News::create(array('title' => 'foo@bar.com',
        	'img'=>'http://wallpapercave.com/wp/bX2d9Aw.jpg',
        	'desc'=>'asdasdasdasdasdasd',
        	'url'=>'http://9gag.com/gag/a579YWL'));
        News::create(array('title' => 'Test News',
        	'img'=>'http://hirewallpapers.com/wp-content/uploads/2016/02/best_republic_of_gamers_wallpaper.jpg',
        	'desc'=>'zzxc',
        	'url'=>'http://9gag.com/gag/aBYb74A'));
        News::create(array('title' => 'foo@bar.com',
        	'img'=>'http://www.ndemok.com/i/razer-blue-wallpaper-1080p.jpg',
        	'desc'=>'asdasdasdasdasdasd',
        	'url'=>'http://9gag.com/gag/a2mAX7E'));
        

    }

};	