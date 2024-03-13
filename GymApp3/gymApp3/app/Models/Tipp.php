<?php

namespace App\Models;

class Tipp {
    public static function all() {
        return [
            ['id' => 1, 'title' => 'Ernährung', 'description' => 'Ernährung ist wichtig'],
            ['id' => 2, 'title' => 'Muskelaufbau', 'description' => 'Muskelaufbau ist wichtig'],
            ['id' => 3, 'title' => 'Gesundheit', 'description' => 'Gesundheit ist wichtig']
        ];
    }

    public static function find($id) {
        $tipps = self::all();

        foreach ($tipps as $tipp) {
            if ($tipp['id'] == $id) {
                return $tipp;
            }
        }
    }
}