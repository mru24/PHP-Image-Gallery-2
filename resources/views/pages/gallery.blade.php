@extends('layout.app')

@section('content')

<h1 class="title">{{ $dir }}</h1>
@if (!empty($files))
<div class="gallery">
  @foreach ($files as $file)
    <div class="image">
      <img src="/storage/{{ $dir }}/{{ $file }}" alt="{{ $file }}_image">
      {!!Form::open(['action' => ['PhotoController@destroy', $dir, $file], 'method' => 'POST'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('&times;', ['class' => 'btn text-danger px-1'])}}
      {!!Form::close()!!}
    </div>
  @endforeach
</div>
@else
  <a href="/">
    <div class="alert alert-warning text-center m-5">
      <h2>Nothing to show here yet!</h2>
      <small>Please come back later</small>
    </div>
  </a>
@endif
@endsection
