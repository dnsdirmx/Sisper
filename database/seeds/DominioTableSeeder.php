<?php

use Illuminate\Database\Seeder;

class DominioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dominios')->insert([
            'ip' => '148.226.12.13',
            'nombre' => 'XALAPA',
		]);
		
        DB::table('dominios')->insert([
            'ip' => '148.226.223.5',
			'nombre' => 'VERACRUZ'
		]);
        DB::table('dominios')->insert([
            'ip' => '148.226.220.4',
			'nombre' => 'CORDOBA-ORIZABA'
		]);

        DB::table('dominios')->insert([
            'ip' => '148.226.210.8',
			'nombre' => 'POZA RICA-TUXPAN'
		]);
        DB::table('dominios')->insert([
            'ip' => '148.226.200.221',
	        'nombre' => 'COATZA-MINA'
		]);
		
    }
}
