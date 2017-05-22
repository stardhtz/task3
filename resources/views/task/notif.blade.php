@if( Session::has('message'))
    <div class="alert alert-success alert-dismissable fade in" role="alert" align="center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>SUCCESS!!</strong><br/>
        {{ Session::get('message') }}
    </div>
@endif
@if(Session::has('errors'))
    <div class="alert alert-danger alert-dismissable fade in" role="alert" align="center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>ERROR!!</strong><br/>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif