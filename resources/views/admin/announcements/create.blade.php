@extends('layout')
  
@section('content')
    <div class="row">
        <div class=" mt-4 ml-4">
            <h2>Add New Announcements</h2>
        </div>
        <div class="pull-right mt-4 ml-4">
            <a class="btn btn-primary" href="{{ route('announcements.index') }}"> Back</a>
        </div>
    </div>

   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form class="mt-4 ml-4" action="{{ route('announcements.store') }}" method="POST">
    @csrf
  
     <div class="row ">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" style="display:flex;flex-direction:column;align-items:center">
                <strong>title:</strong>
                <input style="width:50%" type="text" name="title" class="form-control" placeholder="title">
            </div>
            <div class="form-group" style="display:flex;flex-direction:column;align-items:center">
                <strong>descreption:</strong>
                <input style="width:50%" type="text" name="descreption" class="form-control" placeholder="descreption">
            </div>
            <div class="form-group" style="display:flex;flex-direction:column;align-items:center">
                <strong>skills:</strong>
                <input style="width:50%" type="text" name="skills" class="form-control" placeholder="skills">
            </div>
            <div class="form-group" style="display:flex;flex-direction:column;align-items:center">
                <strong>comp_id:</strong>
                <input style="width:50%" type="number" name="company_id" class="form-control" placeholder="skills">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection