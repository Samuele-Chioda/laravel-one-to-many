<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['name' => 'Type 1']);
        Type::create(['name' => 'Type 2']);
        Type::create(['name' => 'Type 3']);
    }
}
