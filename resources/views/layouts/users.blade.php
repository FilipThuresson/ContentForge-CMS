<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="border-r border-gray-800 pr-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Users') }}
                </h2>
            </div>
            <div class="ml-2">
                <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">
                    <i class="fa fa-house mb-1"></i>
                </x-nav-link>
                <x-nav-link :href="route('users.create')" :active="request()->routeIs('users.create')">
                    <i class="fa fa-plus mb-1"></i>
                </x-nav-link>
            </div>
        </div>
    </x-slot>

    {{ $slot }}
</x-app-layout>
