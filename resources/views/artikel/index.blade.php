@extends('layout')
@section('content')
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="-my-8 divide-y-2 divide-gray-100">
        @foreach ($post_list as $post)
            <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{$post->getFirstMediaUrl('featured_images')  != '' ? $post->getFirstMediaurl('featured_images') : "https://dummyimage.com/722x402 "}}" alt="blog">
          <span class="mt-1 text-gray-500 text-sm"> Created At : {{ $post->created_at }}</span>
        </div>
        <div class="md:flex-grow md:ml-10">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2 mt-4">{{ $post->title }}</h2>
          <p class="leading-relaxed mt-4">{{ $post->excerpt }}</p>
          <a class="text-indigo-500 inline-flex items-center mt-4">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      @endforeach
       </div>
  </div>
</section>
@endsection
