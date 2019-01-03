@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="card-deck">
          @if(count($posts)>0)
              @foreach($posts as $post)
              <div class="card">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{$post->body}}</p>
                  <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                </div>
              </div>
              @endforeach
          @else
            <div>
              <h1>No Post Found</h1>
            </div>
          @endif
      </div>
    </div>
</div>

@endsection