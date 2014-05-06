// app/database/seeds/UserTableSeeder.php

<?php

class CinemaTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('SessionTimes')->delete();//to remove dependencies
		DB::table('Cinemas')->delete();
		
		Cinema::create(array(
			'name'     => 'Chatswood',
			'address' => 'chatswood cinema address',
			'lat'    => '-33.824607',
			'lon' => '151.207261',
		)
		);
		Cinema::create(array(
		'name'     => 'St Leonard',
		'address' => 'St Leonard cinema address',
		'lat'    => '-33.824607',
		'lon' => '151.207261',
		)
		);
		Cinema::create(array(
		'name'     => 'Crowsnest',
		'address' => 'Crowsnest cinema address',
		'lat'    => '-33.824607',
		'lon' => '151.207261',
		)
		);
		Cinema::create(array(
		'name'     => 'Mosman',
		'address' => 'Mosman cinema address',
		'lat'    => '-33.824607',
		'lon' => '151.207261',
		)
		);
		
	}

}
