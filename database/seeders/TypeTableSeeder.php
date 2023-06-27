<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Types;
use Illuminate\Support\Str;


class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['HTML', 'CSS', 'JavaScript', 'PHP', 'C++'];

        foreach($data as $type){
            $new_type = New Types();
            $new_type->name = $type;
            $new_type->slug = Str::slug($type, '-');
            dump($new_type);
        }
    }
}
