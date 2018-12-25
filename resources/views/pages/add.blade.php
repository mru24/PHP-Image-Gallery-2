@extends('layout.app')

@section('content')

<div class="content">
  {!!Form::open(['action' => 'PhotoController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    <h4 class="border-bottom">Select Images</h1>
    <div class="form-group">
      {{Form::select('dir', $options, '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('Select Images')}}
      {{Form::file('photo[]', array('Multiple' => true, 'class' => 'form-control-file'))}}
    </div>
    {{Form::submit('Upload', ['class' => 'btn btn-success'])}}
    <a href="/" class="btn btn-warning float-right">Cancel</a>
  {!!Form::close()!!}
</div>

@endsection
