@extends('layout')

@section('title', 'Shop')    
  
@section('content')

   <ul>
    @foreach($products as $product)
     
    <li>{{$product->name}} @if($product->name === 'Iphone 14' || $product->name === 'Xaomi 12') <span class="text-green-500">Super cena</span> @endif</li>

    @endforeach
   </ul>
@endsection

