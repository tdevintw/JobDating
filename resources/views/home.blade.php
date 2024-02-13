
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

                    <p class="mb-2 font-bold text-gray-700 dark:text-gray-400">skills required:</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">@foreach ($announcement->skills as $skill)
                        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded opacity-50 ">
                            {{$skill->name}}
                          </button>   
                    @endforeach</p>
                    
                    <p class="mb-2 font-bold text-gray-700 dark:text-gray-400">Created At:</p>
                    <p class="mb-2 text-gray-700 dark:text-gray-400">{{ $announcement->created_at }}</p>
                    <div style="display:flex;justify-content:center;">
                        <div style="background-color: blue;width:60%;height:1px"></div>
                    </div>
                    <div class="mt-2">
                        <form action="{{ route('applies.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="announcements_id" value="{{ $announcement->id }}">
                            @if ($announcement->applies && $announcement->applies->where('user_id', auth()->id())->where('announcements_id', $announcement->id)->count() > 0)
                                <span class="text-white bg-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600">Applied</span>
                                        @else
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Apply</button>
                                @endif
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</main>
@endsection
