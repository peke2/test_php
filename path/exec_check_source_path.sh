#!/bin/sh

#	ファイル実行時のソースのパスを確認する

echo "ルートディレクトリから実行"
echo "php top_dir.php"
php top_dir.php
echo "php child/child_dir.php"
php child/child_dir.php
echo ""


echo "childディレクトリから実行"
cd child
echo "cd child"
echo "php child_dir.php"
php child_dir.php
cd ..
echo ""


echo "他のファイルから読み込まれた場合"
echo "php require_child.php"
php require_child.php
echo ""

