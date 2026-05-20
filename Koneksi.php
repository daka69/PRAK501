<?php
function koneksi() {

    $uri = "postgresql://postgres:Banjarbaru69.@db.erihjdggeykqdluhiclv.supabase.co:5432/postgres";

    $params = parse_url($uri);
    $host = $params['host'];
    $port = $params['port'];
    $user = $params['user'];
    $pass = $params['pass'];
    $db = ltrim($params['path'], '/');

    try {
        $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Koneksi gagal: " . $e->getMessage());
    }
}
?>