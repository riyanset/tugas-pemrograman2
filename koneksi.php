<?php

require_once __DIR__ . '/config.php';

mysqli_report(MYSQLI_REPORT_OFF);

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    http_response_code(500);
    $error = mysqli_connect_error();
    $isPlaceholder = str_contains(DB_USER, 'XXXXXXX') || str_contains(DB_PASS, 'password_anda');
    $isUnknownDb = stripos($error, 'Unknown database') !== false;

    echo '<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8">';
    echo '<title>Koneksi Database Gagal</title>';
    echo '<style>body{font-family:Arial,sans-serif;max-width:640px;margin:60px auto;padding:24px;background:#fff3f3;border:1px solid #f5c2c7;border-radius:12px}';
    echo 'h1{color:#b02a37;margin-top:0}code,ol{background:#f8f9fa;padding:2px 6px;border-radius:4px}ol{padding:16px 16px 16px 32px}</style></head><body>';
    echo '<h1>Koneksi Database Gagal</h1>';
    echo '<p><strong>Error:</strong> ' . htmlspecialchars($error) . '</p>';

    if ($isUnknownDb) {
        echo '<p>Database <code>' . htmlspecialchars(DB_NAME) . '</code> belum ada.</p>';
        echo '<p><strong>XAMPP:</strong> buka phpMyAdmin → Import file <code>database/toko_online.sql</code></p>';
        echo '<p><strong>InfinityFree:</strong> buat database di panel, lalu import <code>database/import_infinityfree.sql</code></p>';
    } elseif ($isPlaceholder) {
        echo '<p>Salin <code>config.db.example.php</code> menjadi <code>config.db.php</code>, ';
        echo 'lalu isi kredensial dari panel InfinityFree → MySQL Databases.</p>';
    } else {
        echo '<p>Pastikan MySQL/XAMPP sudah berjalan dan file SQL sudah diimport di phpMyAdmin.</p>';
    }

    echo '</body></html>';
    exit;
}

mysqli_set_charset($conn, 'utf8mb4');
