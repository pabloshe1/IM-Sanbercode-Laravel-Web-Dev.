<?php
require_once('animal.php');

class Ape extends Animal {
    // Override jumlah kaki khusus untuk kera
    public $legs = 2;

    public function yell() {
        echo "yell : Auooo <br>";
    }
}