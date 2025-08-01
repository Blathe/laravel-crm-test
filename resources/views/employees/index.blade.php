<x-layouts.app :title="__('Employees')">
    <div class="flex w-full flex-1 flex-col rounded-xl">
        <h1 class="mb-4">{{ __('Employee List') }}</h1>
        <a href="{{ route('employees.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 self-start focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            {{ __('Add Employee') }}
        </a>
        <div class="relative flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            @if(count($employees) === 0)
            @else
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-neutral-900 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                {{ __('First Name') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Last Name') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Phone') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Email') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Company') }}
                            </th>
                            <th scope="col" class="px-6 py-3">
                                {{ __('Action') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $employee)
                        <tr class="odd:bg-neutral-700 text-white">
                            <th scope="row" class="px-6 py-4 font-medium">
                                {{ __($employee->first_name) }}
                            </th>
                            <td class="px-6 py-4">
                                {{ __($employee->last_name) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ __($employee->phone) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ __($employee->email) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ __($employee->company->name) }}
                            </td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="#" class="font-medium text-blue-400 dark:text-blue-400 hover:underline">View</a>
                                <a href="#" class="font-medium text-red-400 dark:text-red-400 hover:underline">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
</x-layouts.app>
