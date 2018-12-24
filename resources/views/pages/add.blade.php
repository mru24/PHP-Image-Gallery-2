@extends('layout.app')

@section('content')

<div class="content">
  {!!Form::open(['action' => 'PhotoController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    <h4 class="border-bottom">Select Images</h1>
    <div class="form-group">
      {{Form::file('photo[]', array('Multiple' => true, 'class' => 'inputfile'))}}
      {{-- {{Form::label('file', 'Choose a files')}} --}}
    </div>
    {{Form::submit('Upload', ['class' => 'btn btn-success'])}}
  {!!Form::close()!!}
</div>

@endsection
