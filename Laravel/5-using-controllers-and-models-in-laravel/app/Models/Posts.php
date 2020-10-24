<?php
namespace App\Models;

class Posts {
    private function dummyPostsList() {
        return [[
            'name' => 'Bob'
        ], [
            'name' => 'Bingo'
        ], [
            'name' => 'Berta'
        ]];
    }

    function getAll() {
        return $this->dummyPostsList();
    }
}
