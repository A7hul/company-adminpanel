<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 border-b border-gray-200">
                    <div class="flex dark:text-gray-200 justify-end mb-4">
                        <a href="{{ route('employees.create') }}" class="btn btn-secondary">{{ __('Create Employe') }}</a>
                    </div>
                    <table class="dark:text-gray-200 table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">{{ __('First Name') }}</th>
                                <th class="px-4 py-2">{{ __('Last Name') }}</th>
                                <th class="px-4 py-2">{{ __('Gender') }}</th>
                                <th class="px-4 py-2">{{ __('Mobile') }}</th>
                                <th class="px-4 py-2">{{ __('Email') }}</th>
                                <th class="px-4 py-2">{{ __('Company') }}</th>
                                <th class="px-4 py-2">{{ __('Status') }}</th>
                                <th class="px-4 py-2">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $statuses = [1 => 'Active', 2 => 'Resigned', 3 => 'Suspended'];
                            @endphp
                            @foreach ($employees as $employee)
                            <tr>
                                <td class="border px-4 py-2">{{ $employee->first_name }}</td>
                                <td class="border px-4 py-2">{{ $employee->last_name }}</td>
                                <td class="border px-4 py-2">{{ $employee->gender ?: '-' }}</td>
                                <td class="border px-4 py-2">{{ $employee->mobile }}</td>
                                <td class="border px-4 py-2">{{ $employee->email ?: '-' }}</td>
                                <td class="border px-4 py-2">{{ $employee->company->name }}</td>
                                <td class="border px-4 py-2">{{ $statuses[$employee->status] }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> {{ __('Edit') }}</a>
                                    <form class="inline-block" action="{{ route('employees.destroy', $employee->id) }}" method="POST"
                                        onsubmit="return confirm('{{ __('Are you sure?') }}')">
                                        @csrf
                                        @method('DELETE')
                                        <button  type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> {{ __('Delete') }}</button>
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
