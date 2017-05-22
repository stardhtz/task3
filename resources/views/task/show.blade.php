@section('content')
        <div class="section" style="margin: auto; text-align: center;">
            <img  src="{{asset($image->file)}}" style="max-width: 320px; " />
            <h3>{{$image->caption}}</h3>
        </div>
@endsection
