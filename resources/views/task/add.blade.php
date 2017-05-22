@extends('task.main')

@section('body')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Add Image
                </h3>
            </div>
            <div class="panel-body">
                    {!! Form::open(['url'=>'/images', 'method'=>'POST', 'files'=>'true']) !!}
                    <div class="form-group">
                        <label for="InputFile">
                            Chose Photo
                        </label>
                        <input type="file" id=InputFile" name="userfile" />
                    </div>
                    <div class="form-group">
                        <label for="caption">
                            Caption
                        </label>
                        <input type="text" class="form-control" id="caption" placeholder="Your Caption" name="caption" />
                    </div>
                    <div class="form-group">
                        <label for="description">
                            Password
                        </label>
                        <textarea class="form-control" rows="3" id="description" name="description" placeholder="Your Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    {!! Form::close() !!}
            </div>
            <div class="panel-footer">
                Aditya Zulkarnain
            </div>
        </div>
    </div>
</div>
@stop