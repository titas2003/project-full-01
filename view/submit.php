<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $url = "http://65.2.56.225:30017/api/users";

    $data = [
        "name"     => $_POST["name"],
        "email"    => $_POST["email"],
        "empid"    => $_POST["empid"],
        "password" => $_POST["password"]
    ];

    $payload = json_encode($data);

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Content-Length: " . strlen($payload)
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    echo "<h3>Response Code: $httpCode</h3>";
    echo "<pre>$response</pre>";
}
