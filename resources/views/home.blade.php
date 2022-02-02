@extends('layouts.base')

@section('pageTitle')
Home    
@endsection

@section('pageContent')
<div class="container">
    <div class="sfondo">
        @foreach ($comics as $fumetto)
        <div class="box">
            <img src="{{$fumetto["thumb"]}}" alt="{{$fumetto["thumb"]}}">
            <p>{{$fumetto["series"]}}</p>
        </div> 
        @endforeach
    </div>
</div>
@endsection