@extends('master.main',['Title'=>'Bernardo','nav'=>array(
         array(
         "title"=> 'Brand',
         "href"=> '/brands',
         ),
         array(
         "title"=> 'Create Brand',
         "href"=> '/brands/create',
         ),
         array(
         "href"=> '/cars',
         "title"=> 'Car',
         ),
          array(
         "title"=> 'Create Car',
         "href"=> '/cars/create',
         ),
     ),'active'=>'Car'])

@section('content')

    @component('components.forms.formCar.formEdit',['brand'=>$brand,'car'=>$car,'obj'=>array(
    array(
        'title'=>'registration',
        'value'=>$car->registration,
        'name'=>'registration',
        'type'=>'text',
        'require'=>1,
    ),
    array(
        'title'=>'year_of_manufacture',
        'value'=>$car->year_of_manufacture,
        'name'=>'year_of_manufacture',
        'type'=>'text',
        'require'=>1,
    ),
    array(
        'title'=>'color',
        'value'=>$car->color,
        'name'=>'color',
        'type'=>'text',
        'require'=>1,
    ),
    array(
        'title'=>'brand_id',
        'value'=>$car->brand_id,
        'name'=>'brand_id',
        'type'=>'select',
        'require'=>1,
    ),
    )])

    @endcomponent
@endsection
