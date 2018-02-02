<?php

$private_key = file_get_contents('test_rsa');
$public_key = file_get_contents('test_rsa.pub');

$src_text = '暗号対象の文字列';

openssl_get_publickey($public_key);

printf("--------\n");
var_dump($public_key);
printf("--------\n");
var_dump($private_key);
printf("--------\n");

openssl_public_encrypt($src_text, $encrypted, $public_key);

openssl_private_decrypt($encrypted, $decrypted, $private_key);

printf("元[%s]\n先[%s]\n", $src_text, $decrypted);

