<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as Admin!
                </div>
                <table class="justify-center items-center table table-lg table-auto">
                    <thead>
                        <tr>
                            <th class="border-2 px-2">Id</th>
                            <th class="border-2 px-2">Name</th>
                            <th class="border-2 px-2">Email</th>
                            <th class="border-2 px-2">Created at</th>
                            <th class="border-2 px-2">Updated at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="border-2 px-2">{{ $user->id }}</td>
                            <td class="border-2 px-2">{{ $user->name }}</td>
                            <td class="border-2 px-2">{{ $user->email }}</td>
                            <td class="border-2 px-2">{{ $user->created_at }}</td>
                            <td class="border-2 px-2">{{ $user->updated_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
