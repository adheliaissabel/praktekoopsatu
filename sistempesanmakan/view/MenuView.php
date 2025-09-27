<?php
namespace App\View;

class MenuView {
    public function render(array $menu): void {
        foreach ($menu as $item) {
            echo $item . PHP_EOL;
        }
    }
}
