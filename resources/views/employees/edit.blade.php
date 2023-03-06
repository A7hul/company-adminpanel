<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Employee') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 border-b border-gray-200">
                    <form method="POST" action="{{ route('employees.update', $employee) }}">
                        @csrf
                        @method('PUT')

                        <div class="mt-4">
                            <x-input-label for="first_name" :value="__('First Name')" />
                            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                                :value="old('first_name', $employee->first_name)" required autofocus />
                            <x-input-error :messages="$errors->get('first_name')" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="last_name" :value="__('Last Name')" />
                            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                                :value="old('last_name', $employee->last_name)" required />
                            <x-input-error :messages="$errors->get('last_name')" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="gender" :value="__('Gender')" />
                            <select name="gender" id="gender"
                                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" {{ $employee->gender == '' ? 'selected' : '' }}>{{ __('Select Gender') }}</option>
                                <option value="male" {{ $employee->gender == 'male' ? 'selected' : '' }}>{{ __('Male') }}</option>
                                <option value="female" {{ $employee->gender == 'female' ? 'selected' : '' }}>{{ __('Female') }}</option>
                            </select>
                            <x-input-error :messages="$errors->get('gender')" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="mobile" :value="__('Mobile')" />
                            <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile"
                                :value="old('mobile', $employee->mobile)" required />
                            <x-input-error :messages="$errors->get('mobile')" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email', $employee->email)" />
                            <x-input-error :messages="$errors->get('email')" />
                        </div>
                        
                        <div class="mt-4">
                            <x-input-label for="company_id" :value="__('Company')" />
                            <select id="company_id" name="company_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                <option value="">-- Select Company --</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}" {{ $employee->company_id == $company->id ? 'selected' : '' }}>
                                        {{ $company->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('company_id')" />
                        </div>
                         
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status')" />
                            <div class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="status" value="1" class="form-radio" {{ $employee->status == '1' ? 'checked' : '' }}>
                                    <span class="ml-2">Active</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" name="status" value="2" class="form-radio" {{ $employee->status == '2' ? 'checked' : '' }}>
                                    <span class="ml-2">Resigned</span>
                                </label>
                                <label class="inline-flex items-center ml-6">
                                    <input type="radio" name="status" value="3" class="form-radio" {{ $employee->status == '3' ? 'checked' : '' }}>
                                    <span class="ml-2">Suspended</span>
                                </label>
                            </div>
                            <x-input-error :messages="$errors->get('status')" />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Update Employee') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
