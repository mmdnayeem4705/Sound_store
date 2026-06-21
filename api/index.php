<?php
// Vercel PHP router for Sound Store
$root = realpath(__DIR__ . '/..');
chdir($root);

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestUri = rawurldecode($requestUri);

if ($requestUri === '/' || $requestUri === '') {
    $requestUri = '/index.php';
}

$cleanPath = preg_replace('#\.{2,}#', '', $requestUri);
$filePath = $root . DIRECTORY_SEPARATOR . ltrim($cleanPath, '/');

if (is_dir($filePath)) {
    $filePath = rtrim($filePath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'index.php';
}

if (!file_exists($filePath)) {
    header('HTTP/1.1 404 Not Found');
    echo '404 Not Found';
    exit;
}

$ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
$mimeTypes = [
    'html' => 'text/html',
    'htm' => 'text/html',
    'css' => 'text/css',
    'js' => 'application/javascript',
    'json' => 'application/json',
    'png' => 'image/png',
    'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'gif' => 'image/gif',
    'svg' => 'image/svg+xml',
    'ico' => 'image/x-icon',
    'woff' => 'font/woff',
    'woff2' => 'font/woff2',
    'ttf' => 'font/ttf',
    'eot' => 'application/vnd.ms-fontobject',
    'pdf' => 'application/pdf',
];

if ($ext !== 'php') {
    header('Content-Type: ' . ($mimeTypes[$ext] ?? 'application/octet-stream'));
    readfile($filePath);
    exit;
}

require $filePath;
