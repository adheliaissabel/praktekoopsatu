<?php
namespace App\Controller;

use App\Repository\MenuRepository;
use App\View\MenuView;
use App\Model\Makanan;
use App\Model\Minuman;

class MenuController {
    private MenuRepository $repo;
    private MenuView $view;

    public function __construct(MenuRepository $repo, MenuView $view) {
        $this->repo = $repo;
        $this->view = $view;
    }

    public function seedData(): void {
        $this->repo->tambah(new Makanan("Nasi Goreng", 20000));
        $this->repo->tambah(new Minuman("Es Teh", 5000));
    }

    public function tampilkanMenu(): void {
        $this->view->render($this->repo->semua());
    }
}
