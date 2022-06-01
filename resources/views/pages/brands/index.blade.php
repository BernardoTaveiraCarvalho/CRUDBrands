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

    @component('components.tables.tablesBrand.tableIndex',['title'=>'Brand','object'=>$brand])
    @endcomponent
@endsection
