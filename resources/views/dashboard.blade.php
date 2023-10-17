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

                    @if(auth()->user()->role->name == 'manager')

                        <div class="text-blue-500 font-bold text-2xl">Received Applications</div>
                        <x-extra.dashboard_manager>

                            <x-slot:name>Usmon</x-slot:name>
                            <x-slot:id>12</x-slot:id>
                            <x-slot:date>10/12/2022 12:33</x-slot:date>
                            <x-slot:subject>afjieas uievyn kjerufjd cjieokdkf</x-slot:subject>
                            <x-slot:message>afjieas uievyn kjerufjd cjieokdkf afjieas uievyn kjerufjd cjieokdkf afjieas uievyn kjerufjd cjieokdkf afjieas uievyn kjerufjd cjieokdkfafjieas uievyn kjerufjd cjieokdkfafjieas uievyn kjerufjd cjieokdkfafjieas uievyn kjerufjd cjieokdkfafjieas uievyn kjerufjd cjieokdkfafjieas uievyn kjerufjd cjieokdkfafjieas uievyn kjerufjd cjieokdkfafjieas uievyn kjerufjd cjieokdkfafjieas uievyn kjerufjd cjieokdkfafjieas uievyn kjerufjd cjieokdkfafjieas uievyn kjerufjd cjieokdkf</x-slot:message>
                            <x-slot:email>usmonataboyev2000@gmail.com</x-slot:email>

                        </x-extra.dashboard_manager>

                    @else
                        You're client
                        <x-extra.dashboard_client></x-extra.dashboard_client>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
