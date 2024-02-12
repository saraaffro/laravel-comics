@extends('layouts.main-layout')

@section('content')
<main>
    <div class="container jumbo">
        <div class="label">CURRENT SERIES</div>
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
        <a href="#" class="button">LOAD MORE</a>
    </div> 
    <section class="features">
        <div class="container-features">
            @foreach($features as $feat)
                <div class="feat">
                    <div class="img-container">
                        <img src="{{asset($feat["image"])}}" alt="features">
                    </div>
                    <div class="feat-text">
                        {{ $feat["text"] }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>
   
@endsection
