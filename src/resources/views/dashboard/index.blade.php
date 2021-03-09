<x-app-layout>
   
    <x-slot name="header">
        <h2 class="font-normal text-2xl text-gray-800 .leading-loose">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   

    @include('dashboard.main')


    
</x-app-layout>

