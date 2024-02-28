<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Übungen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">Willkommen auf der Übungsseite</h3>
                    <p>
                        Auf dieser Seite findest du verschiedene Übungen, die dir bei deinem Training helfen können.
                        Wähle eine Übung aus der Liste unten aus und beginne dein Training.
                    </p>

                    <div class="exercise-gallery mt-4">
                        <div class="arm">
                            <a href="{{ route('arm') }}" class="exercise-item" data-description="Beschreibung für Armübungen">
                                <img src="arm.jpg" alt="Armübungen" style="height:200px, width:200px";>
                            </a>
                        </div>
                        <div class="bauch">
                            <a href="{{ route('bauch') }}" class="exercise-item" data-description="Beschreibung für Bauchübungen">
                                <img src="bauch.jpg" alt="Bauchübungen" style="height:200px, width:200px";>
                            </a>
                        </div>
                        <div class="beine">
                            <a href="{{ route('beine') }}" class="exercise-item" data-description="Beschreibung für Beinübungen">
                                <img src="leg.jpg" alt="Beinübungen" style="height:200px, width:200px";>
                            </a>
                        </div>
                        <div class="ruecken">
                            <a href="{{ route('ruecken') }}" class="exercise-item" data-description="Beschreibung für Rückenübungen">
                                <img src="rücken.jpg" alt="Rückenübungen" style="height:200px, width:200px";>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript für die Interaktion -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const exerciseItems = document.querySelectorAll('.exercise-item');

            exerciseItems.forEach(item => {
                item.addEventListener('mouseover', function () {
                    this.classList.add('hovered');
                });

                item.addEventListener('mouseout', function () {
                    this.classList.remove('hovered');
                });
            });
        });
    </script>
</x-app-layout>

<style>
    .exercise-gallery {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-top: 20px;
    }

    .exercise-item {
        position: relative;
        cursor: pointer;
        transition: transform 0.3s;
        text-decoration: none;
    }

    .exercise-item img {
        max-width: 150px;
        height: auto;
        border-radius: 8px;
    }

    .exercise-item.hovered {
        transform: rotateY(180deg);
    }

    .exercise-gallery > * {
        border: 2px solid #3772FF;
        border-radius: 10px;
    }
</style>
