@extends('master.main',['Title'=>'Bernardo','nav'=>array(
         array(
         "title"=> 'Brand',
         "href"=> '/brands',
        "auth"=> "no",
         ),
         array(
         "title"=> 'Create Brand',
         "href"=> '/brands/create',
        "auth"=> "yeas",
         ),
         array(
         "href"=> '/cars',
         "title"=> 'Car',
            "auth"=> "no",
         ),
          array(
         "title"=> 'Create Car',
         "href"=> '/cars/create',
           "auth"=> "yeas",
         ),
     ),'active'=>'Brand'])

@section('content')

    @component('components.forms.formBrand.formEdit',['brand'=>$brand,'obj'=>array(
    array(
        'title'=>'name',
        'value'=>$brand->name,
        'name'=>'name',
        'type'=>'text',
        'require'=>1,
    ),
    )])
    @endcomponent
@endsection
