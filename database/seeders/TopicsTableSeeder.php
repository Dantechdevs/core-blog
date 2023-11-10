<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;
class TopicsTableSeeder extends Seeder
{
    public function run()
    {
        //
        Topic::create([
            'name'=>'advocate',
            'created_at'=>now(),
            'updated_at'=>now(),
            
        ]);
        Topic::create([
            'name'=>'lawyer',
            'created_at'=>now(),
            'updated_at'=>now(),
            
        ]);
        Topic::create([
            'name'=>'courts',
            'created_at'=>now(),
            'updated_at'=>now(),
            
        ]);
        Topic::create([
            'name'=>'advocate two',
            'created_at'=>now(),
            'updated_at'=>now(),
            
        ]);
        Topic::create([
            'name'=>'advocate three',
            'created_at'=>now(),
            'updated_at'=>now(),
            
        ]);
    }
}
