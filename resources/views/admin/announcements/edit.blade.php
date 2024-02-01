@extends('layout')

@section('content')
    <div class="row mt-5 pl-5" style="gap:20px">

            <div class="pull-left">
                <h2>Edit an announcement</h2>
            </div>
            <div class="pull-right">
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
  <div  style="display:flex;flex-direction:column;align-items:center;"">
    <form action="{{ route('announcements.update',$announcement->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="title" value="{{ $announcement->title }}" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="descreption" value="{{ $announcement->descreption }}" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="skills" value="{{ $announcement->skills }}" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="company_id" value="{{ $announcement->company_id }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>
</div>
</div>
@endsection