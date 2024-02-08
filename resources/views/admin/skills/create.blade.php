@extends('layout')
  
@section('content')

<div class="mt-5 pl-3 mb-8">
    <a  href="{{route('skills.index')}}"><button  class="bg-gray-600 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Back</button></a>
      </div>
    <div  style="display:flex;flex-direction:column;align-items:center;"">
      <form class="w-full max-w-lg flex flex-col items-center" action="{{ route('skills.store') }}" method="POST">
          @csrf

            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                  Skill 
                  </label>
              <input type="text" name="name"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" >
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
   
@endsection

