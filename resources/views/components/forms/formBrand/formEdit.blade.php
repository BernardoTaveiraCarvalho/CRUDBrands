<form method="POST" action="{{ url('brands/' . $brand->id) }}">
    @csrf
    @method('PUT')
    @foreach($obj as $array)
        <div class="form-group">
            <label class="h3" for="{{$array['title']}}" >{{strtoupper($array['title'])}}</label>
            @if($array['type']=='textarea')
                <textarea rows="6"
            @endif
            <input id="{{($array['title'])}}"
                   type="{{($array['type'])}}"
                   value="{{($array['value'])}}"
                   name="{{($array['name'])}}"
                   autocomplete="{{($array['title'])}}"
                   placeholder="Type your {{($array['title'])}}"
                   class="form-control
                @error($array['title']) is-invalid @enderror"
                   value="{{ old($array['title']) }}"
                   @if($array['require']==1)
                   required
                   @endif
                   @if($array['type'] == 'radio' && $array['valueActual'] == $array['value'])
                   checked
                   @endif
                   aria-describedby="nameHelp">@if($array['type']=='textarea'){{($array['value'])}}
            </textarea>
            @endif
            @if($array['require']==1)
                <small id="nameHelp" class="form-text text-muted">Required</small>
            @endif
            @error($array['title'])
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    @endforeach
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Edit</button>
</form>
