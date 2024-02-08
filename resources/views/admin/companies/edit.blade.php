@extends('layout')

@section('content')
   


    <div class="mt-5 pl-3 mb-8">
  <a  href="{{route('companies.index')}}"><button  class="bg-gray-600 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Back</button></a>
    </div>
  <div  style="display:flex;flex-direction:column;align-items:center;"">
    <form class="w-full max-w-lg flex flex-col items-center" action="{{ route('companies.update',$company->id) }}" method="POST">
        @csrf
        @method('PUT')
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Name
                </label>
            <input type="text" name="name" value="{{ $company->name }}"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" >
          </div>
          @if ($errors->any())
          <div class="text-center">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
         @endif
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded mt-4">Submit</button>
          </div>
          
      </form>

</div>
</div>
@endsection

{{-- @extends('layout')

@section('content')
    <div class="row mt-5 pl-5" style="gap:20px">

            <div class="pull-left">
                <h2>Edit a Company</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('companies.index') }}"> Back</a>
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
    <form action="{{ route('companies.update',$company->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $company->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>
</div>
</div>
@endsection --}}