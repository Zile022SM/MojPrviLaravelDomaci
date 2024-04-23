@extends('layout')

@section('content')


<section class="bg-white dark:bg-gray-900">

  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Insert product</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>

      <form method="POST" action="{{route('insert-product')}}" class="space-y-8">
        @csrf
          <div>
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product name</label>
              <input id="email" name="name"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Add product name">

              @error('name')
                 <div class="text-red-500">{{ $message }}</div>
              @enderror

          </div>
          <div>
              <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
              <input type="number" id="price" name="price"  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Add price">

              @error('price')
                 <div class="text-red-500">{{ $message }}</div>
              @enderror
          </div>
          <div>
              <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Amount</label>
              <input type="number" id="amount" name="amount"  class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Add amount">

              @error('amount')
                 <div class="text-red-500">{{ $message }}</div>
              @enderror

          </div>
          <div class="sm:col-span-2">
              <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Description</label>
              <textarea id="description" rows="6" name="description" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Add description..."></textarea>

              @error('description')
                 <div class="text-red-500">{{ $message }}</div>
              @enderror
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
      </form>
  </div>

</section>

@endsection