<?php

//	文字列<->バイナリの扱いを確認

$bin = pack('H*', '10002030405060708090a0B0c0d1e2f3');
//$bin = pack('h*', '10002030405060708090a0B0c0d1e2f3');	//小文字だと4bitで上位と下位を入れ替え

$fp = fopen('temp.txt', 'wb');
fwrite($fp, $bin);
fclose($fp);

$arr = unpack('H*', $bin);
var_dump($arr);

