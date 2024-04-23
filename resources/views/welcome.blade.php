@extends('layout')

@php
    use Carbon\Carbon;
@endphp

@section('title', 'Pocetna strana')

@section('content')
    <div class="py-20" style="background: linear-gradient(90deg, #667eea 0%, #764ba2 100%)"
    >
      <div class="container mx-auto px-6 text-center">
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
                <p>Laku noc!/p>
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

    <form method="POST" action="{{route('send-contact')}}" class="space-y-8">
      @csrf
          <div>
              <label for="email" class=" mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
              <input id="email" name="email"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500  w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com">
              @error('email')
                 <div class="text-red-500">{{ $message }}</div>
              @enderror
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
              <input type="text" id="subject" name="subject"  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you">
              @error('subject')
                 <div class="text-red-500">{{ $message }}</div>
              @enderror
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
              <textarea id="message" rows="6" name="message" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
              @error('message')
                <div class="text-red-500">{{ $message }}</div>
              @enderror
          </div>
          <div>
              <button type="submit" class="py-3 px-5  text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-500 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 mb-10">Send message</button>
          </div>
         
      </form>
    </section>


    <section style="background-color: #667eea">
      <h3 class="text-4xl font-bold text-center text-gray-800 mb-8 pt-12">Latest Products</h3>
      <div class="-mx-4 flex flex-wrap p-8 md:grid md:grid-cols-3">

    @foreach($latestProducts as $product)
    
    <div class="w-full px-4 md:w-1/2 lg:w-1/3 text-center">
        <div class="mb-9 rounded-xl py-8 px-7 shadow-md transition-all hover:shadow-lg sm:p-9 lg:px-6 xl:px-9">
            <div class="mx-auto mb-7 inline-block"><svg width="53" height="61" viewBox="0 0 53 61" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="20.8433" y="19.3018" width="10.1675" height="12.201" fill="#ABA8F7"></rect>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.1119 5.91343C40.9499 4.62242 39.4875 3.95192 38.2383 4.04801C36.1465 4.20891 33.9414 5.92602 31.8695 8.63549C30.0459 11.0202 28.5417 13.8917 27.5307 16.2458C33.6951 16.5488 37.7115 15.7786 40.1926 14.5916C42.7088 13.3878 43.5948 11.7969 43.7449 10.3715C43.9049 8.85254 43.2637 7.19309 42.1119 5.91343ZM8.75274 16.6855C6.24093 15.1295 4.93328 12.9984 4.69026 10.691C4.42078 8.13252 5.49249 5.64717 7.08955 3.87282C8.6764 2.10982 10.9989 0.817106 13.4643 1.00675C16.9349 1.27372 19.8489 3.94064 22.0221 6.78264C23.4868 8.69803 24.7428 10.8606 25.7343 12.8643C26.7259 10.8606 27.9818 8.69803 29.4465 6.78264C31.6197 3.94064 34.5337 1.27372 38.0043 1.00675C40.4697 0.817106 42.7922 2.10982 44.3791 3.87282C45.9761 5.64717 47.0478 8.13252 46.7784 10.691C46.5353 12.9984 45.2277 15.1295 42.7159 16.6855H49.8822C51.286 16.6855 52.4241 17.8236 52.4241 19.2274V31.1348C52.4241 32.5386 51.286 33.6766 49.8822 33.6766H49.3122V58.6608C49.3122 59.9464 48.1845 60.9886 46.7933 60.9886H31.5363L31.5191 60.9887L31.502 60.9886H20.3521L20.3349 60.9887L20.3178 60.9886H5.0608C3.66963 60.9886 2.54187 59.9464 2.54187 58.6608L2.54187 33.6766C1.13804 33.6766 0 32.5386 0 31.1348V19.2274C0 17.8236 1.13803 16.6855 2.54187 16.6855H8.75274ZM33.0443 58.1952H46.2895V33.6766H33.0443V58.1952ZM33.0443 30.6264H49.3738V19.7358H33.0443V30.6264ZM29.994 19.7358V30.6264H21.8601V19.7358H29.994ZM29.994 33.6766V58.1952H21.8601V33.6766H29.994ZM18.8098 58.1952V33.6766H5.56459V58.1952H18.8098ZM18.8098 30.6264V19.7358H3.05024V30.6264H18.8098ZM13.2303 4.04801C11.9811 3.95192 10.5187 4.62242 9.35668 5.91343C8.20488 7.19309 7.56373 8.85254 7.72372 10.3715C7.87385 11.7969 8.7598 13.3878 11.276 14.5916C13.7571 15.7786 17.7735 16.5488 23.9379 16.2458C22.9269 13.8917 21.4227 11.0202 19.5991 8.63549C17.5272 5.92602 15.3221 4.20891 13.2303 4.04801Z"
                        fill="#6A64F1"></path>
                </svg></div>
            <div>
                <h3 class="mb-4 text-xl font-bold text-black sm:text-2xl lg:text-xl xl:text-2xl">{{ $product->name }}
                </h3>
                <p class="text-base font-medium text-body-color">{{ $product->description }}</p>
                <p class="text-base font-medium text-body-color">{{ Carbon::parse($product->created_at)->diffForHumans() }}</p>
            </div>
        </div>
    </div>
        
    @endforeach
    
</div>
    </section>
@endsection
