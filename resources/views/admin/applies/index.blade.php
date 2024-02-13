
@extends('layout')

@section('content')
<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 text-center	">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">ID</th>
                            <th scope="col" class="px-4 py-3">User_name</th>
                            <th scope="col" class="px-4 py-3">Announcement_title</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                            <th scope="col" class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applies as $apply)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">{{ $apply->id }}</td>
                            <td class="px-4 py-3">{{ $apply->user->name }}</td>
                            <td class="px-4 py-3">{{ $apply->announcement->title  }}</td>
                            <td class="px-4 py-3">{{ $apply->status}}</td>

                            <td>
                                @if ($apply->status == 'accepted')
                                <button  class="bg-green-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">Accepted</button>
                                @elseif($apply->status =='rejected')
                                <button   class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">Rejected</button>
                                @else
                                <div class="flex justify-center gap-1.5">
                                    <form action="{{ route('applies.accept',$apply->id) }}" method="POST">
                                        @csrf
                                        <button  type="submit" class="bg-green-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">Accept</button>
                                    </form>
                                <form action="{{ route('applies.reject',$apply->id) }}" method="POST">
                                      
                                    @csrf
                                    <button  type="submit" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">Reject</button>
                                </form>
                            </div>
                                @endif
                                
                           
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
@endsection