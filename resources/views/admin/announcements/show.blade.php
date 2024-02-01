
@extends('layout')
  
@section('content')
<div class="mt-5 pl-5 ">
    <a  href="{{route('announcements.index')}}"><button  class="bg-gray-600 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Back</button></a>
    </div>

    
 <div class="flex justify-center">
       <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 text-center w-80 ">
       <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong><h2>title:</h2>  </strong>{{ $announcement->title }}</p>
       <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong><h2>descreption:</h2>  </strong>{{ $announcement->descreption }}</p>
       <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong><h2>skills:</h2>  </strong>{{ $announcement->skills }}</p>
       <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong><h2>company_id:</h2>  </strong>{{ $announcement->company_id }}</p>
       <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong><h2>created_at:</h2>  </strong>{{ $announcement->created_at }}</p>



</div>
</div>

</div>
@endsection
