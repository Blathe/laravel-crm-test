<x-layouts.app :title="__('Companies')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(count($companies) === 0)
            <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                    <div class="flex flex-col gap-2 items-center justify-center">
                        <p>You don't have any companies yet.</p>
                        <a href="{{ route('companies.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Add Company
                        </a>
                    </div>
            </div>
        @else
            <h1>Companies</h1>
                <a href="{{ route('companies.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 self-start focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Add Company
                </a>
                <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
                    <div class="flex flex-row flex- gap-4">
                        @foreach($companies as $company)
                            <div class="p-4 outline-black rounded-md outline flex flex-col gap-2">
                                <img src="https://placehold.co/500x500" width="128" height="128" class="bg-cover"  alt="Placeholder alt text"/>
                                <p>{{$company->name}}</p>
                                <p>Employees: 0</p>
                                @if(isset($company->website))
                                    <p>Website: <a href="{{$company->website}}" class="underline text-blue-400">Link</a></p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
        @endif
    </div>
</x-layouts.app>
