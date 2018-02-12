<?php

$config = [
	//'digest_alg' => 'sha256',
	'private_key_bits' => 512,
	'private_key_type' => OPENSSL_KEYTYPE_RSA,
];

$pkey = openssl_pkey_new($config);

openssl_pkey_export($pkey, $private_key);
printf("\n---- output private key\n");
printf($private_key);

$pubkey = openssl_pkey_get_details($pkey);

printf("\n---- output public key\n");
printf($pubkey['key']);
printf("\n");

//openssl_public_encrypt('ハローワールド', $crypted, [$pubkey['key'], '']);

$created_private_key = <<<EOT
-----BEGIN PRIVATE KEY-----
MIIBCgIBADANBgkqhkiG9w0BAQEFAASB9TCB8gIBAAIxAPHQJLM2oWRu4JoRAJgm
BFOGOZWXt6uDIS43H1xrgYDjK7sILCx/wfSujyf+q7MiVQIDAQABAjB4hV1FVT0r
aXfYUhERxCDz4DpjLLMGcNvov8rOABb0uvdMr5QtrenaWC822G98WQECGQD6PUxa
4WidmintXEngF1bTXBI90PjsFkkCGQD3YS/hajUQie5+rfI+2Te3CA1Rck3be60C
GQCfZAwOlyUbveaW2gH0SulzF2JHHaRwPIECGHseMn9EpZ5Sl5ESr3LaFuGQL1iu
w9MNjQIYGjYLu/c5dOQViAiOq2/UTFE02R5CRlXB
-----END PRIVATE KEY-----
EOT;

//	XMLから作ったpem
$created_public_key = <<<EOT
-----BEGIN PUBLIC KEY-----
MFowDQYJKoZIhvcNAQEBBQADSQAwRgJBAIEGf9daYSB8f6QJcPFukGKL7a1t3BNG
PA3rv/4bwQQcW5vphTkOecm/YoPX+FJE+OOzQwyKAq1e3b6c+TVsxYcCARE=
-----END PUBLIC KEY-----
EOT;


openssl_public_encrypt('暗号化テスト', $crypted, [$created_public_key, '']);
$base64_encoded = base64_encode($crypted);
printf("暗号化確認:".$base64_encoded."\n");
//$result = openssl_private_decrypt($crypted, $decrypted_result, $created_private_key);
//printf("復号確認:".$decrypted_result."\n");

printf("\n");
/*
$encrypted_text = "O4OXDBb8FWDH5Z5xUxfF+EIEGXOJ1Q/MgSoI6Wy5/2ShmBvNXA3KNF0aOSn0jppPW+70GcZJSGaGBE3wyB5TfT8bnynXS/vt8YgX5czNBaFNVREAq48H29y5jl3nB2LeQJnbAYdoci8=";
//$encrypted_text = "AYeszlJNGoYYi7WxkJsgIv7Ix9sakeSnKn2gcG/7EDuRVOAyUGfUcM6Kd14oVIiX8HdrkC7cegZ02FVMS6KrSSa0dmDTHwmqrls4Davn";
$encrypted_text = base64_decode($encrypted_text);
$result = openssl_private_decrypt($encrypted_text, $decrypted, $created_private_key);
var_dump($result);

if( FALSE === $result )
{
	while( FALSE !== ($e = openssl_error_string()) )
	{
		printf("error=".$e."\n");
	}
}
*/
