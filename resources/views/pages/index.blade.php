@extends('layout.app')

@section('content')

<h1>Image Gallery</h1>
@if (!empty($files))
<div class="gallery" style="display:flex;flex-wrap:wrap;margin:20px">
  @foreach ($files as $file)
    <div class="image" style="margin:2px;">
      <img src="storage/photos/{{ $file }}" alt="" width="180">
    </div>
  @endforeach
</div>
@else
  <h1>Nothing to show here yet!</h1>
  <small>come back later</small>
@endif
@endsection
