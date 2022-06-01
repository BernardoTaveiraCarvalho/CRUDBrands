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

    @component('components.forms.formCar.formShow',['title'=>'Car','obj'=>$car])
    @endcomponent
@endsection
