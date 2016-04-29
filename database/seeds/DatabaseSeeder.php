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
        $this->call('QuestTableSeeder');
    }
};

class QuestTableSeeder extends Seeder {

    public function run()
    {
        DB::table('quests')->delete();

        Quest::create(array('id'=>'1',
            'user_id' => '955469181168026',
        	'game'=>'HS',
        	'desc'=>'asdasdasdasdasdasd',
        	'pct'=>'10'));
       
        Quest::create(array('id'=>'2',
            'user_id' => '955469181168026',
        	'game'=>'HS',
        	'desc'=>'zzzz',
        	'pct'=>'110'));
        
        Quest::create(array('id'=>'3',
            'user_id' => '955469181168026',
        	'game'=>'CSGO',
        	'desc'=>'cxcsd',
        	'pct'=>'140'));

        Quest::create(array('id'=>'4',
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
        	'img'=>'http://img-9gag-fun.9cache.com/photo/a579YWL_700b.jpg',
        	'desc'=>'asdasdasdasdasdasd',
        	'url'=>'http://9gag.com/gag/a579YWL'));
        News::create(array('title' => 'Test News',
        	'img'=>'http://img-9gag-fun.9cache.com/photo/aBYb74A_700b.jpg',
        	'desc'=>'zzxc',
        	'url'=>'http://9gag.com/gag/aBYb74A'));
        News::create(array('title' => 'foo@bar.com',
        	'img'=>'http://img-9gag-fun.9cache.com/photo/a2mAX7E_700b.jpg',
        	'desc'=>'asdasdasdasdasdasd',
        	'url'=>'http://9gag.com/gag/a2mAX7E'));
        

    }

};	