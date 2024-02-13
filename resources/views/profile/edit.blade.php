<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h1 class="mt-5 mb-5">Applies Accepted:</h1>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 text-center	">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Id</th>
                            <th scope="col" class="px-4 py-3">User_name</th>
                            <th scope="col" class="px-4 py-3">announcement title</th>
                            <th scope="col" class="px-4 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applies as $apply)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">{{ $apply->id }}</td>
                            <td class="px-4 py-3">{{ $apply->user->name }}</td>
                            <td class="px-4 py-3">{{ $apply->announcement->title}}</td>
                            <td class="px-4 py-3">{{ $apply->status}}</td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <form method="POST" action="{{ route('profile.updateSkills') }}">
                    @csrf
                    <div class="w-full mt-3">
                        <label for="skills" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Skills</label>
                        <select class="js-example-basic-multiple w-full" id="skills" name="skills[]" multiple="multiple">
                            @foreach($skills as $skill)
                                <option value="{{ $skill->id }}" {{ $user->skills->contains($skill) ? 'selected' : '' }}>{{ $skill->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Skills</button>
                    </div>
                </form>
                
            </div>
            <div>
                
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
</x-app-layout>
