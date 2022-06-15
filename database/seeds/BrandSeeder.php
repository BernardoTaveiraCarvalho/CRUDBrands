<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('public/images');
        $arrayName= array(
            'BMW','Mercedes','Pocaontas','Panamera'
        );

        foreach ($arrayName as $array){
            \DB::table('brands')->insert([
                'name'      => $array ,
                'created_at'=> now(),
                'updated_at'=>now(),
            ]);
        }
    }
}
