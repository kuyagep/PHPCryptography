<?php

if (isset($_POST['decrypt'])) {
    $encryption_key = file_get_contents('encryption_key.txt');
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $decrypted_file_name = uniqid('', true) . '.' . $file_ext;
    move_uploaded_file($file_tmp, $decrypted_file_name);
    decryptFile($decrypted_file_name, $encryption_key);
    $decrypted_file = file_get_contents('decoded_file.txt');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $decrypted_file_name . '"');
    echo $decrypted_file;
    
}

function decryptFile($file_path, $encryption_key)
{
    $encoded_data = file_get_contents($file_path);
    $encrypted_data = base64_decode($encoded_data);

    $decrypted_data = openssl_decrypt($encrypted_data, 'AES-256-CBC', $encryption_key, OPENSSL_RAW_DATA, $encryption_key);
    file_put_contents('decoded_file.txt', $decrypted_data);
}