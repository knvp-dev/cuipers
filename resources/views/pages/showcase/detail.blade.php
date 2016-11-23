@extends('layout.layout')

@section('hero')
<section class="hero is-small is-info is-bold">
  <div class="hero-body">
    <div class="container">
      
    </div>
  </div>
</section>
@endsection

@section('content')

<section class="section">
    <div class="container has-text-centered">

        <div class="heading mb-50">
          <h1 class="title">{{ $album->category }} {{ $album->title }}</h1>
          <hr>
          <h2 class="subtitle">
            Een overzicht van onze realisatie te {{ $album->title }} .
          </h2>
        </div>
        
        <div class="showcase-album-container has-text-centered gallery">
          @foreach($photos as $photo)
          	<a class="showcase-album-item" href="/images/{{ $album->category }}/{{ $photo->path }}">
          		  <img class="showcase-album-image" src="/images/{{ $album->category }}/{{ $photo->path }}" alt="image">
          	</a>
          @endforeach
        </div>
        
    </div>
  </section>

@endsection