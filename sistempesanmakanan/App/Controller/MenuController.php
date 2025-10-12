<?php
namespace App\Controller;

use App\Repository\MenuRepository;
use App\View\MenuView;
use App\Traits\Loggable;  // <-- tambahkan ini

class MenuController {
    use Loggable;   // <-- tambahkan ini

    private MenuRepository $repo;
    private MenuView $view;

    public function __construct(MenuRepository $repo, MenuView $view) {
        $this->repo = $repo;
        $this->view = $view;
    }

    public function seedData() {
        $this->log("Seed data jalan");  // contoh pakai log
        echo "Seed data jalan\n";
    }

    public function tampilkanMenu() {
        $this->log("Tampilkan menu jalan");  // contoh pakai log
        echo "Tampilkan menu jalan\n";
    }
}
