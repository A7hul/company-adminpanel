<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 border-b border-gray-200">
                    <div class="flex dark:text-gray-200 justify-end mb-4">
                        <a href="{{ route('companies.create') }}" class="btn btn-secondary">{{ __('Create Company') }}</a>
                    </div>
                    <table class="dark:text-gray-200 table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">{{ __('Name') }}</th>
                                <th class="px-4 py-2">{{ __('Email') }}</th>
                                <th class="px-4 py-2">{{ __('Website') }}</th>
                                <th class="px-4 py-2">{{ __('Logo') }}</th>
                                <th class="px-4 py-2">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td class="border px-4 py-2">{{ $company->name }}</td>
                                    <td class="border px-4 py-2">{{ $company->email }}</td>
                                    <td class="border px-4 py-2">{{ $company->website }}</td>
                                    <td class="border px-4 py-2">
                                        @if ($company->logo)
                                            <img src="{{ asset('storage/logos/' . $company->logo) }}" alt="{{ $company->name }} Logo" class="h-10">
                                        @else
                                            <span class="text-gray-400">{{ __('No Logo') }}</span>
                                        @endif
                                    </td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> {{ __('Edit') }}</a>

                                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('Are you sure?') }}')"><i class="fa fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
