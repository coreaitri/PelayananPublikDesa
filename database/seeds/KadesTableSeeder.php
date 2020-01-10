<?php

use Illuminate\Database\Seeder;
use App\Models\UserKades;

class KadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserKades::create([
            'name'      =>  "Kades",
            'email'     =>  'kades@kades.com',
            'password'  =>  bcrypt('kadeskades'),
        ]);
    }
}
