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
     ),'active'=>'Brand'])

@section('content')

    @component('components.forms.formBrand.formCreate',['obj'=>array(
    array(
        'title'=>'name',
        'name'=>'name',
        'type'=>'text',
        'require'=>1,
    ),
    )])
    @endcomponent
@endsection
