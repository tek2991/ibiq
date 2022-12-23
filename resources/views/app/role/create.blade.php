<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-jet-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('role.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 sm:w-1/2">
                            <!--Role Name -->
                            <div class="mt-4">
                                <x-jet-label for="name" :value="__('Role Name')" />

                                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required autofocus />
                            </div>
                            <!--Permissions -->
                            <div class="mt-4">
                                <x-jet-label for="permissions" :value="__('Permissions')" />
                                <x-input-select id="permission_id" class="block mt-1 w-full" name="permission_id" multiple required>
                                    <option value="" disabled selected>Select Permissions</option>
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->id }}">
                                            {{ $permission->name }}</option>
                                    @endforeach
                                </x-input-select>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4 ">
                            <x-jet-button class="ml-3" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                {{ __('Save') }}
                            </x-jet-button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
