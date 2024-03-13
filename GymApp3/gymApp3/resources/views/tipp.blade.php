<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tipps') }}
        </h2>
    </x-slot>
    <h2>{{$tipp['title']}}</h2>  
    <p>{{$tipp['description']}}</p>
</x-app-layout>

<style>
    h2, p {
        color: #3772ff;
    }
</style>

