@extends('layout')

@section('title', 'Pocetna strana')

@section('content')
    <div class="py-20" style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)"
    >
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold mb-2 text-white">
          Smart Health Monitoring Wristwatch!
        </h2>
        <h3 class="text-2xl mb-8 text-gray-200">
          Monitor your health vitals smartly anywhere you go.
        </h3>

        <button class="bg-white font-bold rounded-full py-4 px-8 shadow-lg uppercase tracking-wider">
          Pre Order {{$currentHour}}h  - {{$date}} 

          @switch($currentHour)
            @case($currentHour >0 && $currentHour < 12)
                <p>Dobro jutro</p>
                @break

            @case($currentHour >12 && $currentHour < 20)
                <p>Dobar dan</p>
                @break

            @case($currentHour >20 && $currentHour < 24)
                <p>Dobro vece</p>
                @break

            @default
                <p>Nepoznata vrednost</p>
          @endswitch
        </button>
      </div>
    </div>
    <section class="container mx-auto px-6 p-10">
      <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
        Features
      </h2>
      <div class="flex items-center flex-wrap mb-20">
        <div class="w-full md:w-1/2">
          <h4 class="text-3xl text-gray-800 font-bold mb-3">Exercise Metric</h4>
          <p class="text-gray-600 mb-8">Our Smart Health Monitoring Wristwatch is able to capture you vitals while you exercise. You can create different category of exercises and can track your vitals on the go.</p>
        </div>
        <div class="w-full md:w-1/2">
          <img src="{{ asset('/assets/images/4.png') }}" alt="Monitoring" />
        </div>
      </div>

    
    </section>
    <section class="bg-gray-100">
      <div class="container mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
          Testimonials
        </h2>
        <div class="flex flex-wrap">
          <div class="w-full md:w-1/3 px-2 mb-4">
            <div class="bg-white rounded shadow py-2">
              <p class="text-gray-800 text-base px-6 mb-5">Monitoring and tracking my health vitals anywhere I go and on any platform I use has never been easier.</p>
              <p class="text-gray-500 text-xs md:text-sm px-6">John Doe</p>
            </div>
          </div>
          <div class="w-full md:w-1/3 px-2 mb-4">
            <div class="bg-white rounded shadow py-2">
              <p class="text-gray-800 text-base px-6 mb-5">As an Athlete, this is the perfect product for me. I wear my Smart Health Monitoring Wristwatch everywhere I go, even in the bathroom since it's waterproof.</p>
              <p class="text-gray-500 text-xs md:text-sm px-6">Jane Doe</p>
            </div>
          </div>
          <div class="w-full md:w-1/3 px-2 mb-4">
            <div class="bg-white rounded shadow py-2">
              <p class="text-gray-800 text-base px-6 mb-5">I don't regret buying this wearble gadget. One of the best gadgets I own!.</p>
              <p class="text-gray-500 text-xs md:text-sm px-6">James Doe</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section style="background-color: #667eea">
      <div class="container mx-auto px-6 text-center py-20">
        <h2 class="mb-6 text-4xl font-bold text-center text-white">
          Limited in Stock
        </h2>
        <h3 class="my-4 text-2xl text-white">
          Get yourself the Smart Health Monitoring Wristwatch!
        </h3>
        <button
          class="bg-white font-bold rounded-full mt-6 py-4 px-8 shadow-lg uppercase tracking-wider"
        >
          Pre Order
        </button>
      </div>
    </section>
@endsection
