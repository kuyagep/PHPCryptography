<?php

if (isset($_POST['encrypt'])) {
    $encryption_key = openssl_random_pseudo_bytes(16);
    file_put_contents('encryption_key.txt', $encryption_key);
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $encrypted_file_name = uniqid('', true) . '.' . $file_ext;
    move_uploaded_file($file_tmp, $encrypted_file_name);
    encryptFile($encrypted_file_name, $encryption_key);
    $encrypted_file = basename('encoded_file.txt');
    // echo $encrypted_file;
    header("Location: index.php?encrypted=". $encrypted_file ."");
}

function encryptFile($file_path, $encryption_key)
{
    $plaintext = file_get_contents($file_path);
    $encrypted_data = openssl_encrypt($plaintext, 'AES-256-CBC', $encryption_key, OPENSSL_RAW_DATA, $encryption_key);

    $encoded_data = base64_encode($encrypted_data);
    file_put_contents('encoded_file.txt', $encoded_data);
}