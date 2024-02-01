
@extends('layout')
  
@section('content')
<div class="mt-5 pl-5">
    <div class="row" style="gap:20px">

            <div class="pull-left">
                <h2> Show company</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
            </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $company->name }}
            </div>
        </div>
    </div>
</div>
@endsection
