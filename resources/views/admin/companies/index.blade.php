
@extends('layout')
 
@section('content')

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="mt-10 mb-6">
            <a  href="{{route('companies.create')}}"><button  class="bg-gray-600 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Add company</button></a>
            </div>
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 text-center	">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">No</th>
                                <th scope="col" class="px-4 py-3">company</th>
                                <th scope="col" class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{ ++$i }}</td>
                                <td class="px-4 py-3">{{ $company->name }}</td>

                                <td>
                                    <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
                       
                                        <a class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded" href="{{ route('companies.show',$company->id) }}">Show</a>
                        
                                        <a class="bg-green-500 hover:bg-green-900 text-white font-bold py-2 px-4 rounded" href="{{ route('companies.edit',$company->id) }}">Edit</a>
                       
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


{{-- 
@extends('layout')
 
@section('content')
    <div class="row mt-4 ml-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('companies.create') }}">Create New company</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="pt-5 pl-5">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->created_at }}</td>
            <td>{{ $company->updated_at }}</td>
            <td>
                <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('companies.show',$company->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

    {!! $company->links() !!}
      
@endsection --}}