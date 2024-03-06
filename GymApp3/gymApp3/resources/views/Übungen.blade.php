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
                        <div class="uebung arm">
                            <a href="{{ route('arm') }}" class="exercise-item" data-description="Beschreibung für Armübungen">
                                <img src="arm.jpg" alt="Armübungen">
                            </a>
                            <h2>Arm</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                              <g id="Ellipse_8" data-name="Ellipse 8" fill="#3772ff" stroke="#3772ff" stroke-width="1">
                                <circle cx="15" cy="15" r="15" stroke="none"/>
                                <circle cx="15" cy="15" r="14.5" fill="none"/>
                              </g>
                            </svg>
                        </div>
                        <div class="uebung bauch">
                            <a href="{{ route('bauch') }}" class="exercise-item" data-description="Beschreibung für Bauchübungen">
                                <img src="bauch.jpg" alt="Bauchübungen">
                            </a>
                            <h2>Bauch</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                              <g id="Ellipse_8" data-name="Ellipse 8" fill="#3772ff" stroke="#3772ff" stroke-width="1">
                                <circle cx="15" cy="15" r="15" stroke="none"/>
                                <circle cx="15" cy="15" r="14.5" fill="none"/>
                              </g>
                            </svg>
                        </div>
                        <div class="uebung beine">
                            <a href="{{ route('beine') }}" class="exercise-item" data-description="Beschreibung für Beinübungen">
                                <img src="leg.jpg" alt="Beinübungen">
                            </a>
                            <h2>Bein</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                              <g id="Ellipse_8" data-name="Ellipse 8" fill="#3772ff" stroke="#3772ff" stroke-width="1">
                                <circle cx="15" cy="15" r="15" stroke="none"/>
                                <circle cx="15" cy="15" r="14.5" fill="none"/>
                              </g>
                            </svg>
                        </div>
                        <div class="uebung ruecken">
                            <a href="{{ route('ruecken') }}" class="exercise-item" data-description="Beschreibung für Rückenübungen">
                                <img src="rücken.jpg" alt="Rückenübungen">
                            </a>
                            <h2>Rücken</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                              <g id="Ellipse_8" data-name="Ellipse 8" fill="#3772ff" stroke="#3772ff" stroke-width="1">
                                <circle cx="15" cy="15" r="15" stroke="none"/>
                                <circle cx="15" cy="15" r="14.5" fill="none"/>
                              </g>
                            </svg>
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
    
    /* google font nunito */
    @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

    h2 {
        font-family: "Nunito", sans-serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        font-size: 30px
    }
    .exercise-gallery {
        display: block;
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

    
    .exercise-item.hovered {
        transform: rotateY(180deg);
    }
    
    
    /* uebung */
    .exercise-gallery > * {
        border: 2px solid #3772FF;
        border-radius: 10px;
    }
    
    .uebung {
        display: flex;
        align-items: center;
        /* justify-content: space-around; */
        gap: 10px;
        height: 130px;
        width: auto;
    }
    
    .exercise-item img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        object-position: left 20%;
        border-radius: 8px;
    }
</style>
