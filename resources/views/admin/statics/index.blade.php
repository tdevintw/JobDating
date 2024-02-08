
@extends('layout')
 
@section('content')
<section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
     
      <div class="flex flex-wrap -m-4 text-center">
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
            <div style="display:flex;felx-direction:column;justify-content:center">
            <img  style="width:50px" src="{{ asset('storage/images/pencil.png') }}" alt="no">
            </div>
            <h2 class="title-font font-medium text-3xl text-gray-900">{{$counts['skills']}}</h2>
            <p class="leading-relaxed">Skills</p>
          </div>
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
            <div style="display:flex;felx-direction:column;justify-content:center">
                <img  style="width:50px" src="{{ asset('storage/images/group.png') }}" alt="no">
                </div>
            <h2 class="title-font font-medium text-3xl text-gray-900">{{$counts['users']}}</h2>
            <p class="leading-relaxed">Users</p>
          </div>
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
            <div style="display:flex;felx-direction:column;justify-content:center">
                <img  style="width:50px" src="{{ asset('storage/images/office-building.png') }}" alt="no">
                </div>
            <h2 class="title-font font-medium text-3xl text-gray-900">{{$counts['companies'] }}</h2>
            <p class="leading-relaxed">Companies</p>
          </div>
        </div>
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
            <div style="display:flex;felx-direction:column;justify-content:center">
                <img  style="width:50px" src="{{ asset('storage/images/loudspeaker.png') }}" alt="no">
                </div>
            <h2 class="title-font font-medium text-3xl text-gray-900">{{$counts['announcements']}}</h2>
            <p class="leading-relaxed">Announcements</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection