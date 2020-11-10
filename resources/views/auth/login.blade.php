<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="grid grid-flow-col auto-cols-max flex items-center">
            <div class="inline-block">
                <a class="transition duration-200 ease-in-out bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full" href="{{ route('social.login', ['provider' => 'facebook']) }}">Login facebook</a>
            </div>
            <div class="inline-block">
                <a class="transition duration-200 ease-in-out bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-full" href="{{ route('social.login', ['provider' => 'github']) }}">Login github</a>
            </div>
            <div class="inline-block">
                <a class="transition duration-200 ease-in-out bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" href="{{ route('social.login', ['provider' => 'twitter']) }}">Login twitter</a>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
