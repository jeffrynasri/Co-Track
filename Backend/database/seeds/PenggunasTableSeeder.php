<?php

use Illuminate\Database\Seeder;
use App\Pengguna;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengguna::truncate();

        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 10; $i++) {
            Pengguna::create([
                'penggunas_dev_id' => $faker->uuid,
                'penggunas_nama' => $faker->name,
                'penggunas_alamat' => $faker->address,
                'penggunas_email' => $faker->safeEmail,
                'penggunas_no_hp' => $faker->phoneNumber,
                'penggunas_state' => $faker->randomElement($array = [
                    'berhenti',
                    'jalan',
                    'lari'
                ]),
                'penggunas_lat' => $faker->latitude($min = -90, $max = 90) ,
                'penggunas_long' => $faker->longitude($min = -180, $max = 180),
            ]);
        }
    }
}
