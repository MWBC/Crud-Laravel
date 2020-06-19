<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Contact_seeding extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        factory(App\Models\Contact::class, 5)->create();

        /*DB::table('contacts')->insert([

            'name'=> Str::random('10'),
            'telephone'=> random_int('10000000', '99999999'),
            'email'=> Str::random('10') . "@gmail.com"
        ]);*/
    }
}
