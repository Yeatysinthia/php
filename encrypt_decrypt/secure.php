<?php
// $password = "123#";
// //md5()
// echo md5($password);
// echo "<br>";
// //hash
// echo hash('SHA512', "admin@");
// echo "<br>";
// echo hash('SHA224', "admin#");
// echo "<br>";
// echo hash('SHA384', "admin123");
// echo "<br>";
// echo hash('SHA256', "$password");
// echo "<br>";
// echo "<br>";

// echo "<br>";

// echo "<br>";
// echo password_hash($password,PASSWORD_DEFAULT);

// base64_encode
// base64_decode()

// $store = "meem";

// echo base64_encode($store);

// echo base64_decode("bWVlbQ==");



$data = "Hello123";
$key = "secretkey";
$method = "AES-128-CTR";

// IV length বের করা
$iv_length = openssl_cipher_iv_length($method);

// Random IV generate করা
$iv = openssl_random_pseudo_bytes($iv_length);

// Encrypt (IV use করতে হবে)
$encrypted = openssl_encrypt($data, $method, $key, 0, $iv);

// Decrypt (same IV use করতে হবে)
$decrypted = openssl_decrypt($encrypted, $method, $key, 0, $iv);

// Output
echo "Original Data: " . $data . "\n";
echo "<br>";
echo "Encrypted Data: " . $encrypted . "\n";
echo "<br>";
echo "Decrypted Data: " . $decrypted . "\n";

?>


