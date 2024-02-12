@extends('layouts.main-layout')

@section('content')
<main>
    <h2>{{$comic["series"]}}</h2>
    <img src="{{asset ($comic["thumb"])}}" alt="">
</main>
   
@endsection
