
@extends('layout')
 
@section('content')

@if(session()->has('succes'))
<div class="flex justify-center mt-5 mb-5">
    <div style="background-color: green;color:white;display:flex" class="bg-green border border-green text-black px-4 py-3 rounded relative w-1/2" role="alert">
        <strong class="font-bold">Success:</strong>
        <span class="block sm:inline">{{ session('succes') }}</span>
    </div>
</div>
@endif


<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="mt-10 mb-6">
        <a  href="{{route('skills.create')}}"><button  class="bg-gray-600 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Add Skill</button></a>
        </div>
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 text-center	">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">ID</th>
                            <th scope="col" class="px-4 py-3">Skill</th>
                            <th scope="col" class="px-4 py-3">created_at</th>
                            <th scope="col" class="px-4 py-3">updated_at</th>
                            <th scope="col" class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">{{ $skill->id }}</td>
                            <td class="px-4 py-3">{{ $skill->name }}</td>
                            <td class="px-4 py-3">{{ $skill->created_at}}</td>
                            <td class="px-4 py-3">{{ $skill->updated_at }}</td>
                            <td>
                                <form action="{{ route('skills.destroy',$skill->id)}}" method="POST">
                                       
                                    <a class="bg-green-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded" href="{{ route('skills.edit',$skill->id) }}">Edit</a>
                   
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
<section>
@endsection