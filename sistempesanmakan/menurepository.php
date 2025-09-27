<?php
namespace App\Repository;

use App\Model\Menu;
use IteratorAggregate;
use ArrayIterator;

class MenuRepository implements IteratorAggregate {
    private array $data = [];

    public function tambah(Menu $menu): void { $this->data[] = $menu; }
    public function semua(): array { return $this->data; }
    public function update(int $i, Menu $menu): void { if (isset($this->data[$i])) $this->data[$i] = $menu; }
    public function hapus(int $i): void { unset($this->data[$i]); }

    public static function infoRepo(): string {
        return "Repository untuk data menu";
    }

    public function getIterator(): ArrayIterator {
        return new ArrayIterator($this->data);
    }
}
