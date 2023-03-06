<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Company') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 border-b border-gray-200">
                    <form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-4">
                            <x-input-label for="name" :value="__('Name')" />
                        
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        
                            <x-input-error :messages="$errors->get('name')" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                        
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                        
                            <x-input-error :messages="$errors->get('email')" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="website" :value="__('Website')" />
                        
                            <x-text-input id="website" class="block mt-1 w-full" type="text" name="website" :value="old('website')" />
                        
                            <x-input-error :messages="$errors->get('website')" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="logo" :value="__('Logo')" />
                        
                            <input id="logo" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="file" name="logo" :value="old('logo')" required>
                        
                            <x-input-error :messages="$errors->get('logo')" />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
