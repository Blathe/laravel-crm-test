<x-layouts.app :title="__('Companies')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4 space-y-8">

            <p class="font-bold">{{ __('Create Employee') }}</p>

            <form method="post" action="{{ route('employees.store') }}" class="mx-auto">
                @csrf
                <div class="mb-5">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('First Name') }}</label>
                    <input required type="text" id="first_name" name="first_name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" placeholder="John" />
                </div>
                <div class="mb-5">
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Last Name') }}</label>
                    <input required type="text" id="last_name" name="last_name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" placeholder="Doe" />
                </div>
                <div class="mb-5">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Phone Number') }}</label>
                    <input type="tel" id="phone" name="phone" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" placeholder="(123) 456-7890"/>
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Email') }}</label>
                    <input type="email" id="email" name="email" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" placeholder="johndoe@email.com" />
                </div>
                <div class="mb-5">
                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Company') }}</label>
                    <select required id="company" name="company_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-500 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($companies as $id => $name)
                            <option value="{{$id}}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Company</button>
            </form>

        </div>
    </div>
</x-layouts.app>
