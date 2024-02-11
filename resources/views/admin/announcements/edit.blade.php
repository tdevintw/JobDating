@extends('layout')
  
@section('content')

<div class="mt-5 pl-3 mb-8">
    <a href="{{ route('announcements.index') }}"><button class="bg-gray-600 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">Back</button></a>
</div>

<div style="display:flex;flex-direction:column;align-items:center;">
    <form class="w-full max-w-lg flex flex-col items-center" action="{{ route('announcements.update', $announcement->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                Title
            </label>
            <input type="text" name="title" value="{{ $announcement->title }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="title">
        </div>

        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                Description
            </label>
            <input type="text" name="descreption" value="{{ $announcement->descreption }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="description">
        </div>

        <div class="w-full md:w-1/2 px-3 mt-3">
            <select name="company_id" id="company_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-label="Default select example">
                <option selected disabled>Select company</option>
                @foreach($companies as $company)
                <option value="{{ $company->id }}" {{ $announcement->company_id == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="w-full mt-3">
            <select class="js-example-basic-multiple w-full" name="skills[]" multiple="multiple">
                @foreach($skills as $skill)
                <option value="{{ $skill->id }}" {{ in_array($skill->id, $announcement->skills->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $skill->name }}</option>
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

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

@endsection
