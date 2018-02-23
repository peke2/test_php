<?php

$pubkey = <<<EOT
-----BEGIN PUBLIC KEY-----
MIGdMA0GCSqGSIb3DQEBAQUAA4GLADCBhwKBgQCVCLfmGWcR6XY1MzWnhjfpovR3Ls7b6PPEoOUnYgzHUwCm7l3SjQqw6bbipH+KGYFBtRk6SmzctD8larD3ZNy7lXLLvMCJRMzp2XhppN2DILchSKvH/dTZ53RjwFbbgQTXlwuAXhuD4oxMOIdu6O4D9SfwKRpAA4CnaSQflutYjwIBEQ==
-----END PUBLIC KEY-----
EOT;

openssl_public_encrypt('公開鍵での暗号化確認文字列', $encrypted, [$pubkey, '']);

echo base64_encode($encrypted);
