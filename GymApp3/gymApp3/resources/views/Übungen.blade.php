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
                            <div class="uebung-name">
                                <a href="{{ route('arm') }}" class="exercise-item" data-description="Beschreibung für Armübungen">
                                    <img src="arm.jpg" alt="Armübungen">
                                </a>
                            <h4>Arm</h4>
                            </div>
                            <a href="{{ route('arm') }}" class="exercise-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
                                  <defs>
                                    <clipPath id="clip-path">
                                      <circle id="icon_more" data-name="icon_more" cx="15" cy="15" r="15" transform="translate(315 487)" fill="#3772ff" stroke="#3772ff" stroke-width="1"/>
                                    </clipPath>
                                  </defs>
                                  <g id="Gruppe" data-name="Gruppe" transform="translate(-315 -487)" clip-path="url(#clip-path)">
                                    <g id="icon_more" transform="translate(315 487)">
                                      <path id="Pfad_12" data-name="Pfad 12" d="M15,30A15,15,0,1,1,30,15,15.018,15.018,0,0,1,15,30ZM15,2.5A12.5,12.5,0,1,0,27.5,15,12.515,12.515,0,0,0,15,2.5Z" fill="#3688ff"/>
                                      <path id="Pfad_13" data-name="Pfad 13" d="M13.749,20.625a1.25,1.25,0,0,1-.885-2.133L16.356,15l-3.489-3.492a1.249,1.249,0,0,1,1.767-1.767l4.374,4.374a1.247,1.247,0,0,1,0,1.767l-4.374,4.377A1.251,1.251,0,0,1,13.749,20.625Z" fill="#5f6379"/>
                                    </g>
                                  </g>
                                </svg>
                            </a>
                        </div>
                        <div class="uebung bauch">
                            <div class="uebung-name">
                                <a href="{{ route('bauch') }}" class="exercise-item" data-description="Beschreibung für Bauchübungen">
                                    <img src="bauch.jpg" alt="Bauchübungen">
                                </a>
                                <h4>Bauch</h4>
                            </div>
                            <a href="{{ route('bauch') }}" class="exercise-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
                                  <defs>
                                    <clipPath id="clip-path">
                                      <circle id="icon_more" data-name="icon_more" cx="15" cy="15" r="15" transform="translate(315 487)" fill="#3772ff" stroke="#3772ff" stroke-width="1"/>
                                    </clipPath>
                                  </defs>
                                  <g id="Gruppe" data-name="Gruppe" transform="translate(-315 -487)" clip-path="url(#clip-path)">
                                    <g id="icon_more" transform="translate(315 487)">
                                      <path id="Pfad_12" data-name="Pfad 12" d="M15,30A15,15,0,1,1,30,15,15.018,15.018,0,0,1,15,30ZM15,2.5A12.5,12.5,0,1,0,27.5,15,12.515,12.515,0,0,0,15,2.5Z" fill="#3688ff"/>
                                      <path id="Pfad_13" data-name="Pfad 13" d="M13.749,20.625a1.25,1.25,0,0,1-.885-2.133L16.356,15l-3.489-3.492a1.249,1.249,0,0,1,1.767-1.767l4.374,4.374a1.247,1.247,0,0,1,0,1.767l-4.374,4.377A1.251,1.251,0,0,1,13.749,20.625Z" fill="#5f6379"/>
                                    </g>
                                  </g>
                                </svg>
                            </a>
                        </div>
                        <div class="uebung beine">
                            <div class="uebung-name">
                                <a href="{{ route('beine') }}" class="exercise-item" data-description="Beschreibung für Beinübungen">
                                    <img src="leg.jpg" alt="Beinübungen">
                                </a>
                                <h4>Bein</h4>
                            </div>
                            <a href="{{ route('beine') }}" class="exercise-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
                                  <defs>
                                    <clipPath id="clip-path">
                                      <circle id="icon_more" data-name="icon_more" cx="15" cy="15" r="15" transform="translate(315 487)" fill="#3772ff" stroke="#3772ff" stroke-width="1"/>
                                    </clipPath>
                                  </defs>
                                  <g id="Gruppe" data-name="Gruppe" transform="translate(-315 -487)" clip-path="url(#clip-path)">
                                    <g id="icon_more" transform="translate(315 487)">
                                      <path id="Pfad_12" data-name="Pfad 12" d="M15,30A15,15,0,1,1,30,15,15.018,15.018,0,0,1,15,30ZM15,2.5A12.5,12.5,0,1,0,27.5,15,12.515,12.515,0,0,0,15,2.5Z" fill="#3688ff"/>
                                      <path id="Pfad_13" data-name="Pfad 13" d="M13.749,20.625a1.25,1.25,0,0,1-.885-2.133L16.356,15l-3.489-3.492a1.249,1.249,0,0,1,1.767-1.767l4.374,4.374a1.247,1.247,0,0,1,0,1.767l-4.374,4.377A1.251,1.251,0,0,1,13.749,20.625Z" fill="#5f6379"/>
                                    </g>
                                  </g>
                                </svg>
                            </a>
                        </div>
                        <div class="uebung ruecken">
                            <div class="uebung-name">
                                <a href="{{ route('ruecken') }}" class="exercise-item" data-description="Beschreibung für Rückenübungen">
                                    <img src="rücken.jpg" alt="Rückenübungen">
                                </a>
                                <h4>Rücken</h4>
                            </div>
                            <a href="{{ route('ruecken') }}" class="exercise-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
                                  <defs>
                                    <clipPath id="clip-path">
                                      <circle id="icon_more" data-name="icon_more" cx="15" cy="15" r="15" transform="translate(315 487)" fill="#3772ff" stroke="#3772ff" stroke-width="1"/>
                                    </clipPath>
                                  </defs>
                                  <g id="Gruppe" data-name="Gruppe" transform="translate(-315 -487)" clip-path="url(#clip-path)">
                                    <g id="icon_more" transform="translate(315 487)">
                                      <path id="Pfad_12" data-name="Pfad 12" d="M15,30A15,15,0,1,1,30,15,15.018,15.018,0,0,1,15,30ZM15,2.5A12.5,12.5,0,1,0,27.5,15,12.515,12.515,0,0,0,15,2.5Z" fill="#3688ff"/>
                                      <path id="Pfad_13" data-name="Pfad 13" d="M13.749,20.625a1.25,1.25,0,0,1-.885-2.133L16.356,15l-3.489-3.492a1.249,1.249,0,0,1,1.767-1.767l4.374,4.374a1.247,1.247,0,0,1,0,1.767l-4.374,4.377A1.251,1.251,0,0,1,13.749,20.625Z" fill="#5f6379"/>
                                    </g>
                                  </g>
                                </svg>
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
    /* google font nunito */
    @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

    /* h3 {
        font-family: "Nunito", sans-serif;
        font-optical-sizing: auto;
        font-weight: 1000;
        font-style: bold;
        font-size: 50px
    } */

    h4 {
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
        justify-content: space-between;
        align-items: center;
        height: 130px;
        width: auto;
        margin: 2rem;
        padding: 3rem;
    }
    
    .exercise-item img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        object-position: left 20%;
        border-radius: 8px;
    }

    .uebung-name {
        display: flex;
        align-items: center;
        gap: 30px;
        padding: 0;
        margin: 0;
    }
</style>
