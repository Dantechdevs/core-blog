<?php

declare(strict_types=1);

namespace Database\Seeders;
use App\Models\Advocate;
use Illuminate\Database\Seeder;

class AdvocatesTableSeeder extends Seeder
{
    public function run()
    {
        //

      Advocate::firstOrCreate([
            'name' => 'Kelvin ',
           'address'=> '1990 meru j ',
          'location'=> 'meru ',
          'phone'=> '0700023039 ',
           'email'=> 'Kelvin@advocates.co.ke ',
           'bio'=> 'Now, our counter component is assigned to the /counter route, so that when a user visits the /counter endpoint in your application, this component will be rendered by the browser. ',
           
           'website'=> 'Kelvin.com ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
       Advocate::firstOrCreate([
            'name' => 'Denis ',
           'address'=> '1990 meru j ',
          'location'=> 'meru ',
          'phone'=> '0700023039 ',
           'email'=> 'Denis@advocates.co.ke ',
           'bio'=> 'Now, our counter component is assigned to the /counter route, so that when a user visits the /counter endpoint in your application, this component will be rendered by the browser. ',
           'website'=> 'Kelvin.com ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Advocate::firstOrCreate([
            'name' => 'John ',
           'address'=> '1990 meru j ',
          'location'=> 'meru ',
          'phone'=> '0700023039 ',
           'email'=> 'John@advocates.co.ke ',
           'bio'=> 'Now, our counter component is assigned to the /counter route, so that when a user visits the /counter endpoint in your application, this component will be rendered by the browser. ',
           'website'=> 'Kelvin.com ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
         Advocate::firstOrCreate([
            'name' => 'James ',
           'address'=> '1990 meru j ',
          'location'=> 'meru ',
          'phone'=> '0700023039 ',
           'email'=> 'James@advocates.co.ke ',
           'bio'=> 'Now, our counter component is assigned to the /counter route, so that when a user visits the /counter endpoint in your application, this component will be rendered by the browser. ',
           'website'=> 'Kelvin.com ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
          Advocate::firstOrCreate([
            'name' => 'Angel',
           'address'=> '1990 meru j ',
          'location'=> 'meru ',
          'phone'=> '0700023039 ',
           'email'=> 'Angel@advocates.co.ke ',
           'bio'=> 'Now, our counter component is assigned to the /counter route, so that when a user visits the /counter endpoint in your application, this component will be rendered by the browser. ',
           'website'=> 'Kelvin.com ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
 Advocate::firstOrCreate([
            'name' => 'Lucy ',
           'address'=> '1990 meru j ',
          'location'=> 'meru ',
          'phone'=> '0700023039 ',
           'email'=> 'Lucy@advocates.co.ke ',
           'bio'=> 'Now, our counter component is assigned to the /counter route, so that when a user visits the /counter endpoint in your application, this component will be rendered by the browser. ',
           'website'=> 'Kelvin.com ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);






    }
}
