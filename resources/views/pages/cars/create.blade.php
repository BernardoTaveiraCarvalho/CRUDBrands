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
     ),'active'=>'Create Car'])

@section('content')

    @component('components.forms.formCar.formCreate',['obj'=>array(
    array(
        'title'=>'registration',
        'name'=>'registration',
        'type'=>'text',
        'require'=>1,
    ),
    array(
        'title'=>'year_of_manufacture',
        'name'=>'year_of_manufacture',
        'type'=>'text',
        'require'=>1,
    ),
    array(
        'title'=>'color',
        'name'=>'color',
        'type'=>'text',
        'require'=>1,
    ),
     array(
        'title'=>'Brand',
        'name'=>'brand_id',
        'type'=>'select',
        'value'=>$brand,
        'require'=>1,
    ),
    )])
    @endcomponent
@endsection
