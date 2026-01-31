<?php
require_once('animal.php');

class Frog extends Animal {
    public function jump() {
        echo "jump : hop hop <br>";
    }
}