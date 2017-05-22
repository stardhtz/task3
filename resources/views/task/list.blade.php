@extends('task.main')
@section('content')
@section('body')


    <div class="row">
        <div class="col-md-12">
            <a href="{{url('images/create')}}" class="btn btn-success btn-lg">
                <span class="glyphicon glyphicon-plus"></span> Add Image
            </a>
            <hr />
        </div>
    </div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <b>Image List</b>
                </h3>
            </div>
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="body">


                                <!-- Foto -->

                                <div class="row-row">
                                    @foreach($images as $image)
                                    <div class="thumbnail">
                                        <!--
                                        <a href="{{url('images/show/'.$image->id)}}"  class="btn modalMd" title="Show Data" data-toggle="modal" data-target="#modalMd">
                                            <img alt="Bootstrap Thumbnail First" src="{{asset($image->file)}}" class="hoverZoomLink" />
                                        </a>

                                            <img alt="Bootstrap Thumbnail First" src="{{asset($image->file)}}" class="hoverZoomLink"  onclick="document.getElementById('id{{$image->id}}').style.display='block'"  />
                                            -->
                                            <img class="w3-hover-opacity" alt="Bootstrap Thumbnail First" src="{{asset($image->file)}}" onclick="document.getElementById('id{{$image->id}}').style.display='block'" >

                                        <div class="caption">
                                            <h3>
                                                {{$image->caption}}
                                            </h3>
                                            <p>
                                                {{$image->description}}
                                            </p>
                                            <p>
                                            <div class="media well">
                                                <div class="row">
                                                    <a class="btn btn-success btn-block" href="{{url('images/'.$image->id.'/edit')}}" style="margin-bottom: 5px;">Edit</a>
                                                    {!! Form::open(['url'=>'/images/'.$image->id]) !!}
                                                    {!! Form::hidden('_method', 'DELETE') !!}
                                                    {!! Form::submit('Delete', [ 'class' => 'btn btn-danger btn-block', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                <!-- End Foto -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                Aditya Zulkarnain
            </div>
        </div>
    </div>
</div>
    <!-- Modal CSS-->

@foreach($images as $image)
    <div id="id{{$image->id}}" class="w3-modal w3-animate-opacity" onclick="this.style.display='none'">
        <div class="animated jello" id="capt">{{$image->caption}}</div>
        <img class="w3-modal-content" src="{{asset($image->file)}}" style="max-width: 300px; margin: auto; top: 50%; left: 50%; transform: translate(-50%, -50%);">
    </div>
@endforeach

    <!-- Modal CSS-->

@stop