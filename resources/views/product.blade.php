@extends('master')
@section("content")

   


<div class="trending-wrapper">
        <h3>Tredning Products</h3>
        @foreach($products as $item)
        <div class="trening-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}">
          <div class="">
            <h3>{{$item['name']}}</h3>
          </div>
        </a>
        </div>
        @endforeach
      </div>
    



@endsection