
@extends('layout')
  
@section('content')
<div class="mt-5 pl-5">
    <div class="row" style="gap:20px">

            <div class="pull-left">
                <h2> Show announcement</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('announcements.index') }}"> Back</a>
            </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $announcement->title }}
            </div>
            <div class="form-group">
                <strong>skills:</strong>
                {{ $announcement->skills }}
            </div>
            <div class="form-group">
                <strong>descreption:</strong>
                {{ $announcement->descreption }}
            </div>
        </div>
    </div>
</div>
@endsection
