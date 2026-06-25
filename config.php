<?php

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$is_local = $host === 'localhost'
    || $host === '127.0.0.1'
    || str_contains($host, 'localhost');

if ($is_local) {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'toko_online');
} else {
    // Salin config.db.example.php menjadi config.db.php lalu isi kredensial InfinityFree
    if (file_exists(__DIR__ . '/config.db.php')) {
        require __DIR__ . '/config.db.php';
    } else {
        define('DB_HOST', 'sqlXXX.infinityfree.com');
        define('DB_USER', 'if0_XXXXXXX');
        define('DB_PASS', 'password_anda');
        define('DB_NAME', 'if0_XXXXXXX_toko_online');
    }
}
