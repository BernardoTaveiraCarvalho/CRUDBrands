<h1>{{$title}}</h1>
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }} <i class="bi bi-check2 h1"></i>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
{{$object->links()}}
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Show</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($object as $obj)
        <tr>
            <th scope="row">{{$obj->id}}</th>
            <td>{{$obj->name}}</td>
            <td>{{$obj->created_at}}</td>
            <td>{{$obj->updated_at}}</td>
            <td><a class="btn btn-success" href="{{url('brands/'.$obj->id)}}" role="button">Show</a></td>
            <td><a class="btn btn-primary" href="{{url('brands/'.$obj->id.'/edit')}}" role="button">Edit</a></td>
            <form action="{{url('brands/' . $obj->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <td>  <button type="submit" class="btn btn-danger">Delete</button></td>
            </form>
        </tr>
    @endforeach

    </tbody>
</table>
{{$object->links()}}
