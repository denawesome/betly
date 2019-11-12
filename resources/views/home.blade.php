@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                {{-- <img src="https://www.hommenorthopedics.com/editor-uploads/website-755/multi-sports-blog-1530684776.jpg" class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">Sport</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Show list of games</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                {{-- <img src="https://static10.tgstat.ru/channels/_0/27/275779def6b6b3d68ba01760e34f27c5.jpg" class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">Cyber Sport</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Show list of games</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
