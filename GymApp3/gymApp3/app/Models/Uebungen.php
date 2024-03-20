<?php

namespace App\Models;

class Uebungen {
    public static function all() {
        return [
            ['id' => 1, 'title' => 'Arm', 'description' => 'Armtraining ist wichtig']
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