<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('send.notification') }}">
                        @csrf

                        <!-- User ID -->
                        <div>
                            <x-input-label for="user_id" :value="__('UserID')" />
                            <x-text-input id="user_id" class="block mt-1 w-full" type="number" name="user_id" required autofocus />
                        </div>

                        <!-- Message -->
                        <div class="mt-4">
                            <x-input-label for="message" :value="__('Message')" />
                            <x-text-input id="message" class="block mt-1 w-full" type="text" name="message" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-3">
                                {{ __('Send Notification') }}
                            </x-primary-button>
                        </div>
                    </form>
                    @if (session('success'))
                        <p class="mt-4 text-green">{{ session('success') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
