// app/database/seeds/UserTableSeeder.php

<?php

class MoviesTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('Movies')->delete();
		
		Movie::create(array(
			'name'     => 'Movie 1',
		)
		);
		Movie::create(array(
		'name'     => 'Movie 2',
		)
		);
		Movie::create(array(
		'name'     => 'Movie 3',
		)
		);
		Movie::create(array(
		'name'     => 'Movie 4',
		)
		);
		Movie::create(array(
		'name'     => 'Movie 5',
		)
		);
		Movie::create(array(
		'name'     => 'Movie 6',
		)
		);
		
	}

}
