@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        {!! Form::open(['action' => 'PostsController@store','method' => 'post']) !!}
            <div class="form-group">
                {{ Form::label("Title", null, ['class' => 'control-label']) }}
                {{ Form::text('title', '', array_merge(['class' => 'form-control','required'=>'required'])) }}
            </div>
            <div class="form-group">
                {{ Form::label("Body", null, ['class' => 'control-label']) }}
                {{ Form::textarea('body', '', array_merge(['class' => 'form-control', 'required'=>'required'])) }}
            </div>
            <div class="form-group">
                {{   Form::submit('Submit', array_merge(['class' => 'btn btn-success']))}}
            </div>
        {!! Form::close() !!}
      </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    $('textarea').ckeditor();
    // $('.textarea').ckeditor(); // if class is prefered.
</script>
    
@endsection