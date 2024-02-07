
@extends('layout')
 
@section('content')

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="mt-10 mb-6">
            <a  href="{{route('announcements.create')}}"><button  class="bg-gray-600 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Add announcement</button></a>
            </div>
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 text-center	">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">No</th>
                                <th scope="col" class="px-4 py-3">title</th>
                                <th scope="col" class="px-4 py-3">descreption</th>
                                <th scope="col" class="px-4 py-3">skills</th>
                                <th scope="col" class="px-4 py-3">created_at</th>
                                <th scope="col" class="px-4 py-3">company</th>
                                <th scope="col" class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($announcements as $announcement)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{ ++$i }}</td>
                                <td class="px-4 py-3">{{ $announcement->title }}</td>
                                <td class="px-4 py-3">{{ $announcement->descreption}}</td>
                                <td class="px-4 py-3">{{ $announcement->created_at }}</td>
                                <td class="px-4 py-3">{{ $announcement->company->name }}</td>
                                <td>
                                    <form action="{{ route('announcements.destroy',$announcement->id) }}" method="POST">
                       
                                        <a class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded" href="{{ route('announcements.show',$announcement->id) }}">Show</a>
                        
                                        <a class="bg-green-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded" href="{{ route('announcements.edit',$announcement->id) }}">Edit</a>
                       
                                        @csrf
                                        @method('DELETE')
                          
                                        <button  type="submit" class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
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