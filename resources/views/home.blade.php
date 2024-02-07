@extends('layout')
@section('content')
<main>
    <h1 class="mt-10 mb-8 text-center text-4xl">Announcements:</h1>
    @if (!empty($no_data))
    <div class="text-center">
    <h1 style="color:red;font-size:50px;">{{$no_data['message']}}</h1>
    <h1 style="color:red;font-size:200px;">{{$no_data['emoji']}}</h1>
</div>
    @endif
    <div class="flex justify-center">
    <div class="flex flex-wrap justify-center" style="width:80%;">
        @foreach ($announcements as $announcement)
            <div class="mx-4 mb-6">
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 text-center w-80">
                    <p class="mb-2 font-bold text-gray-700 dark:text-gray-400">Title:</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">{{ $announcement->title }}</p>

                    <p class="mb-2 font-bold text-gray-700 dark:text-gray-400">Description:</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">{{ $announcement->descreption}}</p>
                    
                    <p class="mb-2 font-bold text-gray-700 dark:text-gray-400">Company Name:</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">{{ $announcement->company->name }}</p>

                    <p class="mb-2 font-bold text-gray-700 dark:text-gray-400">Created At:</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">{{ $announcement->created_at }}</p>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</main>
@endsection
