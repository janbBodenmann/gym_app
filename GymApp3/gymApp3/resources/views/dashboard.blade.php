

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Box mit der Anzahl der aktiven Benutzer -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Aktive Benutzer</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ $userCount }}</p>
                </div>

                <!-- Box mit Statistiken -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Statistiken</h3>
                    <p class="text-gray-600 dark:text-gray-400">Hier könnten verschiedene Statistiken angezeigt werden, z. B. Trainingsdauer, Anzahl der Trainings, etc.</p>
                </div>

                <!-- Box mit weiteren Informationen -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Weitere Informationen</h3>
                    <p class="text-gray-600 dark:text-gray-400">Hier können zusätzliche Informationen wie anstehende Ereignisse, Tipps für Workouts, etc. angezeigt werden.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
