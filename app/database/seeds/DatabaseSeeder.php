<?php

class DatabaseSeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		DB::table('users')->delete();

		$faker = \Faker\Factory::create('es_AR');

		foreach(range(0, 10) as $index)
		{
			User::create([
				'nombres' => $faker->firstName,
				'apellidos' => $faker->lastName,
				'direccion' => $faker->address,
				'telefono' => $faker->phoneNumber,
				'celular' => $faker->phoneNumber,
				'email' => $faker->email,
				'password' => 12345,
			]);

			Product::create([
				'codigo' => $faker->uuid,
				'marca' => $faker->company,
				'modelo' => $faker->md5,
				'cantidad' => $faker->numberBetween(1, 100),
			]);
		}

		Role::create([
			'name' => 'Administrator',
			'detail' => 'Administrador de la tienda'
		]);
		Role::create([
			'name' => 'Seller',
			'detail' => 'Vendedor de la tienda'
		]);
		Role::create([
			'name' => 'Client',
			'detail' => 'Cliente de la tienda'
		]);
	}
}
