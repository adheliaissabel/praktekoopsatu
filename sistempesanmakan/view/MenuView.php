<?php
namespace App\View;

use App\Model\Menu;

class MenuView {
    public function render(Menu $menu) {
        echo $menu . PHP_EOL;
    }
}
