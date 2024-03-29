<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
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

                      @if(count($Uebungen) == 0)
                        <p>Keine Tipps vorhanden</p>
                      @endif
                      @foreach($Uebungen as $uebung)
                        <div class="uebung">
                          <div class="uebung-name">
                              <a href="/uebung/{{$uebung['id']}}" class="exercise-item" data-description="{{$uebung['description']}}">
                                  <img src="{{$uebung['image']}}" alt="{{$uebung['description']}}">
                              </a>
                              <h4>{{$uebung['title']}}</h4>
                          </div>
                          <a href="/uebung/{{$uebung['id']}}" class="exercise-svg">
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
                      @endforeach
                        
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
