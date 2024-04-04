@extends('layouts.app')

@section('content')
<h1 class="mt-2 my-3 fw-bold text-center">{{$project->title}}</h1>

<div class="container">
    <div class="d-flex justify-content-center align-items-center">
        <div class="card" style="width: 40rem;">
            @if ($project->cover)
            <img src="{{ asset( '/storage/' . $project->cover) }}" alt="">
            @endif
            <div class="card-body">
              <p class="card-text text-center"><strong>Slug:</strong> {{$project->slug}}</p>
              <p class="card-text text-center"><strong>Tipologia:</strong> {{$project->type ? $project->type->name : 'Non ci sono tipologie'}}</p>
              <p class="card-text text-center"><strong>Linguaggi/Framework:</strong>
                @if (count($project->technologies) > 0)
                    @foreach ($project->technologies as $technology)
                        {{ $technology->name }}
                    @endforeach
                @else
                    <span>Non ci sono linguaggi e/o framework utilizzati</span>
                @endif
              </p>
              <p class="card-text text-center"><strong>Descrizione:</strong> {{$project->content}}</p>
            </div>
          </div>
    </div>
</div>
@endsection
