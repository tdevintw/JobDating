
@extends('layout')
  
@section('content')
<div class="mt-5 pl-5 ">
    <a  href="{{route('companies.index')}}"><button  class="bg-gray-600 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Back</button></a>
    </div>

    
 <div class="flex justify-center">
       <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 text-center w-80 ">
       <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><strong><h2>Company Name:</h2>  </strong>{{ $company->name }}</p>
</div>
</div>

</div>
@endsection


{{-- 
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
@endsection --}}
