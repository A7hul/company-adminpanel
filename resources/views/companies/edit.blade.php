<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Company') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 border-b border-gray-200">
                    <form method="POST" action="{{ route('companies.update', $company->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <x-input-label for="name" label="Name" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $company->name)" required autofocus />
                            <x-input-error :messages="$errors->get('name')" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="email" label="Email" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $company->email)" />
                            <x-input-error :messages="$errors->get('email')" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="website" label="Website" />
                            <x-text-input id="website" class="block mt-1 w-full" type="text" name="website" :value="old('website', $company->website)" />
                            <x-input-error :messages="$errors->get('website')" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="logo" label="Logo" />
                            @if ($company->logo)
                                <img src="{{ asset('storage/logos/' . $company->logo) }}" alt="{{ $company->name }} logo" class="block h-16 w-16 mb-2">
                            @endif
                            <input id="logo" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="file" name="logo" :value="old('logo')">
                            <x-input-error :messages="$errors->get('logo')" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
