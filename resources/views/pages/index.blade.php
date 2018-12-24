@extends('layout.app')

@section('content')

<h1 class="title">Image Gallery</h1>
@if (!empty($files))
<div class="gallery">
  @foreach ($files as $file)
    <div class="image">
      <img src="storage/photos/{{ $file }}" alt="{{ $file }}_image">
    </div>
  @endforeach
</div>
@else
  <h1>Nothing to show here yet!</h1>
  <small>come back later</small>
@endif
@endsection
