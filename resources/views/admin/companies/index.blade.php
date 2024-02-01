


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