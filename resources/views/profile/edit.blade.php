<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xlleading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8  shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 k shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
            <div>
                <a href="{{ route('dashboard') }}"
                   class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700" >
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
