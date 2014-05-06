// app/database/seeds/UserTableSeeder.php

<?php

class SessionTimesTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('SessionTimes')->delete();
		
		SessionTime::addMovieSession('Chatswood', 'Movie 1', '2014-05-05 10:30:00');
		SessionTime::addMovieSession('Chatswood', 'Movie 1', '2014-05-05 12:30:00');
		SessionTime::addMovieSession('Chatswood', 'Movie 1', '2014-05-05 14:30:00');
		SessionTime::addMovieSession('Chatswood', 'Movie 1', '2014-05-05 16:30:00');
		
		SessionTime::addMovieSession('Crowsnest', 'Movie 1', '2014-05-05 19:30:00');
		SessionTime::addMovieSession('Crowsnest', 'Movie 1', '2014-05-05 21:30:00');
	}

}
