<x-layouts.app :title="__('Employees')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 content-center">
            @if(count($employees) === 0)
                @if($company_count === 0)
                    <div class="flex flex-col gap-2 items-center justify-center">
                        <p>You must create a company before creating employees.</p>
                        <a href="/companies/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Create Company
                        </a>
                    </div>
                @else
                    <div class="flex flex-col gap-2 items-center justify-center">
                        <p>You don't have any employees yet.</p>
                        <a href="/companies/create" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Add Employee
                        </a>
                    </div>
                @endif
            @endif
        </div>
    </div>
</x-layouts.app>
