<?php
/*
Public-Key: (512 bit)
Modulus:
    00:ac:85:51:98:15:09:57:91:9a:ea:c5:cb:73:0e:
    b5:b2:a6:3d:79:ef:1a:50:60:17:3b:a7:e2:cd:90:
    24:cd:1b:74:49:a8:3c:84:87:14:9e:78:5f:cb:d5:
    8b:14:f1:70:5e:e8:b5:01:36:7a:6f:39:ab:d1:b4:
    dd:a7:be:ca:2b
Exponent: 65537 (0x10001)
writing RSA key
-----BEGIN PUBLIC KEY-----
MFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBAKyFUZgVCVeRmurFy3MOtbKmPXnvGlBg
Fzun4s2QJM0bdEmoPISHFJ54X8vVixTxcF7otQE2em85q9G03ae+yisCAwEAAQ==
-----END PUBLIC KEY-----
*/


$decoded_bin = base64_decode('MFwwDQYJKoZIhvcNAQEBBQADSwAwSAJBAKyFUZgVCVeRmurFy3MOtbKmPXnvGlBgFzun4s2QJM0bdEmoPISHFJ54X8vVixTxcF7otQE2em85q9G03ae+yisCAwEAAQ==');

echo bin2hex($decoded_bin);


$pem_bin = '3048024100ac855198150957919aeac5cb730eb5b2a63d79ef1a5060173ba7e2cd9024cd1b7449a83c8487149e785fcbd58b14f1705ee8b501367a6f39abd1b4dda7beca2b0203010001';
echo base64_encode(hex2bin($pem_bin));



