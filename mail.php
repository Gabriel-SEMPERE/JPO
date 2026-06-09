<?php
require_once __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$resend = Resend::client('re_RRBo2Waz_DL7sytcg87rYFrAufL2cjTD5');

try {
    $result = $resend->emails->send([
        'from' => 'onboarding@resend.dev',
        'to' => 'semperegabriel@gmail.com',
        'subject' => 'Hello depuis Resend !',
        'html' => '<strong>First mail</strong>',
    ]);

    echo "Email envoyé avec succès ! ID : " . $result->id;
} catch (Exception $e) {
    echo "Erreur avec Resend : " . $e->getMessage();
}