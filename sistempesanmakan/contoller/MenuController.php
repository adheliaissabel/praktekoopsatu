<?php
namespace App\Controller;

use App\Repository\menurepository;
use App\View\menuview;
use App\Model\makanan;
use App\Model\minuman;

class MenuController {
    private menurepository $repo;
    private menuview $view;

    public function __construct(menurepository $repo, menuview $view) {
        $this->repo = $repo;
        $this->view = $view;
    }

    public function seedData(): void {
        $this->repo->tambah(new makanan("Nasi Goreng", 20000));
        $this->repo->tambah(new minuman("Es Teh", 5000));
    }

    public function tampilkanMenu(): void {
        $this->view->render($this->repo->semua());
    }
}
