@extends('layout.app')

@section('content')

@foreach ($options as $key => $option)
  <div class="box m-2 py-3 px-5 border">
    <a href="/gallery/{{ $option }}" class="text-uppercase lead">{{$option}}</a>
  </div>
@endforeach

@endsection
