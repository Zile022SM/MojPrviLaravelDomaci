@extends('layout')

@section('title', 'Shop')    
  
@section('content')

   <ul>
    @foreach($products as $product)
     
    <li>{{$product}} @if($product === 'Iphone 14' || $product === 'Xiaomi 12') <span class="text-green-500">Super cena</span> @endif</li>

    @endforeach
   </ul>
@endsection

