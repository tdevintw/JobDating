
@extends('layout')
 
@section('content')
    <div class="row mt-4 ml-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('announcements.create') }}">Create New announcement</a>
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
            <th>title</th>
            <th>descreption</th>
            <th>skills</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($announcements as $announcement)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $announcement->title }}</td>
            <td>{{ $announcement->descreption }}</td>
            <td>{{ $announcement->skills }}</td>
            <td>{{ $announcement->created_at }}</td>
            <td>{{ $announcement->updated_at }}</td>
            <td>
                <form action="{{ route('announcements.destroy',$announcement->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('announcements.show',$announcement->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('announcements.edit',$announcement->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

    {{-- {!! $announcement->links() !!} --}}
      
@endsection