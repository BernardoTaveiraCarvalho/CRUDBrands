<h1>{{$title}}</h1>


<div>
    <div class="form-group">
        <label>registration</label>
        <input type="name" value="{{$obj->registration}}" class="form-control" disabled>
        <label>year_of_manufacture</label>
        <input type="name" value="{{$obj->year_of_manufacture}}" class="form-control" disabled>
        <label>color</label>
        <input type="name" value="{{$obj->color}}" class="form-control" disabled>
        <label>brand_id</label>
        <input type="name" value="{{$obj->brand->name}}" class="form-control" disabled>


    </div>
</div>
<a class="btn btn-primary" href="{{url('cars')}}" role="button">Back</a>

