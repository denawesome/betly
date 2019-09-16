@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($games as $game)
                <div class="card">
                    <a href="/games/{{ $game->id }}">
                        <div class="card-header">{{ $game->title }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
