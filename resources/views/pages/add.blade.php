@extends('layout.app')

@section('content')
<div class="content">
  {!!Form::open(['action' => 'PhotoController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    {{Form::file('photo[]', array('Multiple' => true))}}
    {{Form::submit('Submit')}}
  {!!Form::close()!!}

</div>

@endsection
