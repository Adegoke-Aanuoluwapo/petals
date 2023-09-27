{{-- <h1>{{$heading}}</h1>

@if(count($listings)===0)
<p> No listings found</p>
@endif

@unless(count($listings )==0)
@foreach($listings as $listing) --}}
@extends('layout')

@section('content')
@include('partials._search')

<a href="/" class="inline-block text-black ml-4 mb-4">
<i class="fa-solid fa-arrow-left">Back</i>
</a>
<div class="mx-4">
 <div class="bg-grey-50 border border-gray-200 p-10 rounded">
  <div class="flex flex-col items-center justify-center text-center">
   <img class="w-48 mr-6 mb-6" src="{{asset('images/no-image.png')}}" alt="" />
   <h3 class="text-2xl mb-2">
    {{$listing->title}}
   </h3>
   <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
   <ul class="flex">
    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2"><a href="#">Laravel</li>
     <li class="bg-black text-white rounded-xl px-3 py-1 mr-2"><a href="#">Backend</li>
      <li class="bg-black text-white rounded-xl px-3 py-1 mr-2"><a href="#">Vue</li>
  
   </ul>
   <div class="text-lg my-4">
    <i class="fa-solid fa-location-dot"></i>{{$listing->location}}
   </div>
   <div class="border border-gray-200 w-full mb-6"></div>
   <div>
    <h3 class="text-3xl font-bold mb-4">Descrption</h3>
    <div class="text-lg space-y-6">
     {{$listing->description}}
     <a href="{{$listing->email}}" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80">
      <i class="fa-solid fa-envelope"> Contact Employer</i>
     </a>
     <a href="{{$listing->website}}" target="_blank" class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>Visit Website</a>
    </div>
   </div>
  </div>
 </div>
</div>
{{-- @endforeach

    
@else
<p>No listing found</p>    
@endunless --}}
@endsection