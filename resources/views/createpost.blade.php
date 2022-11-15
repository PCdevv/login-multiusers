<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Writer Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as Blog Writer!
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="font-black text-lg my-3">
                        Create a new Blog Post!
                    </div>
                    <form action="" method="post">
                        @csrf
                        <!-- Judul -->
                        <div>
                            <x-input-label for="judul" :value="__('Judul')" />
                            <x-text-input id="judul" class="block mt-1 w-full" type="text" name="judul" :value="old('judul')" required autofocus />
                            <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                        </div>
                        <!-- Deskripsi -->
                        <div>
                            <x-input-label for="deskrpsi" :value="__('Deskrpsi')" />
                            <x-text-input id="deskrpsi" class="block mt-1 w-full" type="text" name="deskrpsi" :value="old('deskrpsi')" required autofocus />
                            <x-input-error :messages="$errors->get('deskrpsi')" class="mt-2" />
                        </div>
                    </form>
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Make Post') }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
