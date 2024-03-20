<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{$uebung["title"]}}
        </h2>
      <?php
      $imagePath = 'logo.png';
      ?>

      <img src="<?php echo $imagePath; ?>" alt="">
    </x-slot>
    <h2>{{$uebung['title']}}</h2>  
    <p>{{$uebung['description']}}</p>
</x-app-layout>

<style>
    h2, p {
        color: #3772ff;
    }
</style>

