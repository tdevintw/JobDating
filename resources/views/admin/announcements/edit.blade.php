@extends('layout')

@section('content')
   


    <div class="mt-5 pl-3 mb-8">
  <a  href="{{route('announcements.index')}}"><button  class="bg-gray-600 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Back</button></a>
    </div>
  <div  style="display:flex;flex-direction:column;align-items:center;"">
    <form class="w-full max-w-lg flex flex-col items-center" action="{{ route('announcements.update',$announcement->id) }}" method="POST">
        @csrf
        @method('PUT')
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Title
                </label>
            <input type="text" name="title" value="{{ $announcement->title }}"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" >
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              descreption
            </label>
            <input type="text" name="descreption" value="{{ $announcement->descreption }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text">
          </div>
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Skills
            </label>
            <input type="text" name="skills" value="{{ $announcement->skills }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text">
          </div>
          <div class="w-full md:w-1/2 px-3">
            <select name="company_id" id="company_id" class="form-select" aria-label="Default select example">
              <option selected value={{ $announcement->company_id }}>{{ $announcement->company->name }}</option>
              @foreach($companies as $company)
              <option value={{ $company->id }}>{{ $company->name }}</option>
              @endforeach
          </select>
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