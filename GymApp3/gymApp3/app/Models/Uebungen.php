<?php

namespace App\Models;

class Uebungen {
    public static function all() {
        return [
            ['id' => 1, 'title' => 'Arm', 'image' => 'arm.jpg', 'description' => 'Armtraining ist wichtig'],
            ['id' => 2, 'title' => 'Rücken', 'image' => 'rücken.jpg', 'description' => 'Rückentraining ist wichtig'],
            ['id' => 3, 'title' => 'Beine', 'image' => 'leg.jpg', 'description' => 'Beinetraining ist wichtig'],
            ['id' => 4, 'title' => 'Bauch', 'image' => 'bauch.jpg', 'description' => 'Bauchtraining ist wichtig']
        ];
    }

    public static function find($id) {
        $uebungen = self::all();

        foreach ($uebungen as $uebung) {
            if ($uebung['id'] == $id) {
                return $uebung;
            }
        }
    }

}