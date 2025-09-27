<?php
require_once __DIR__ . '/autoload.php';

// pakai use biar singkat
use App\Controller\MenuController;
use App\Repository\MenuRepository;
use App\View\MenuView;
use App\Model\Makanan;
use App\Model\Minuman;
use App\Model\Promo;
use App\Model\PromoSpesial;
use App\Model\Admin;
use App\Model\MenuValidator;
use App\Model\HargaInvalidException;
use App\Service\OrderService;

// MVC + CRUD
$controller = new MenuController(new MenuRepository(), new MenuView());
$controller->seedData();
$controller->tampilkanMenu();

echo PHP_EOL;

// Exception Handling
try {
    MenuValidator::validateHarga(-5000);
} catch (HargaInvalidException $e) {
    echo "❌ Error: {$e->getMessage()}\n";
} finally {
    echo "✅ Validasi harga selesai.\n";
}

echo PHP_EOL;

// Late Static Binding
echo Promo::info() . PHP_EOL;
echo PromoSpesial::info() . PHP_EOL;

echo PHP_EOL;

// Final Class
$admin = new Admin("Budi");
echo $admin->getRole() . PHP_EOL;

echo PHP_EOL;

// Iterator
$repo = new MenuRepository();
$repo->tambah(new Makanan("Bakso", 15000));
$repo->tambah(new Minuman("Jus Alpukat", 12000));
foreach ($repo as $item) {
    echo "Iterasi: $item\n";
}

echo PHP_EOL;

// Dependency Injection
$orderService = new OrderService($repo);
$orderService->pesan(new Makanan("Ayam Geprek", 20000));
echo "Pesanan berhasil ditambahkan\n";

echo PHP_EOL;

// Serialization
$makanan = new Makanan("Sate Ayam", 25000);
$serialized = serialize($makanan);
echo "Serialized: $serialized\n";
$unserialized = unserialize($serialized);
echo "Unserialized: $unserialized\n";

echo PHP_EOL;

// Reflection
$reflect = new ReflectionClass(Makanan::class);
echo "Class: " . $reflect->getName() . PHP_EOL;
echo "Methods: " . implode(", ", array_map(fn($m) => $m->getName(), $reflect->getMethods())) . PHP_EOL;

echo PHP_EOL;

// Cloning
$kopi = new Minuman("Kopi Hitam", 10000);
$kopiClone = clone $kopi;
echo "Cloned: $kopiClone\n";

echo PHP_EOL;

// Anonymous Class
$anon = new class("Roti Bakar", 12000) extends Makanan {
    public function ekstra() {
        return "Bonus selai coklat!";
    }
};
echo $anon . " + " . $anon->ekstra() . PHP_EOL;
