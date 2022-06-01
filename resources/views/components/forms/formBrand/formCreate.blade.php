<form method="POST" action="{{ url('brands') }}">
    @csrf
    @foreach($obj as $array)
        <div class="form-group">
            <label class="h3" for="{{$array['title']}}" >{{strtoupper($array['title'])}}</label>
            @if($array['type']=='textarea')
                <textarea
            @endif
            <input id="{{($array['title'])}}"
                   type="{{($array['type'])}}"
                   @if($array['type']=="radio")
                   value="{{($array['value'])}}"
                   @endif
                   name="{{($array['name'])}}"
                   autocomplete="{{($array['title'])}}"
                   placeholder="Type your {{($array['title'])}}"
                   class="form-control
                @error($array['title']) is-invalid @enderror"
                   value="{{ old($array['title']) }}"
                   @if($array['require']==1)
                   required
                   @endif
                   aria-describedby="nameHelp">
            @if($array['type']=='textarea')
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
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
</form>
