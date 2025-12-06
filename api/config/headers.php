<?php
// Habilitar CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Responder a preflight OPTIONS SIEMPRE con 200 y enviando headers
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// SOLO enviamos el Content-Type en peticiones que NO son OPTIONS
header("Content-Type: application/json; charset=UTF-8");
