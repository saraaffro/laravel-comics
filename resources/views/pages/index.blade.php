@extends('layouts.main-layout')

@section('content')
<main>
    <div class="jumbotron">
        <div class="container jumbo">
            <div class="label">CURRENT SERIES</div>
        </div>
    </div>
    <div class="container">
        @foreach ($comics as $comic)
            <div class="thumb">
                <div class="img-thumb-container">
                    <img src="{{asset ($comic["thumb"])}}" alt="img">
                </div>
                <div class="thumb-title">
                    {{$comic["series"]}}
                </div>
            </div>
        @endforeach
    </div> 
</main>
   
@endsection
