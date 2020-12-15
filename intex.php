<?php
//composerの構成ファイル(autoload.php)を読み出して自動で構築してくれる
require 'vendor/autoload.php';
//MongoDBに接続
$client = new MongoDB\Client("mongodb://localhost:27017");
//コレクションの指定,DBやサーバー->データベース->コレクション
$collection = $client->demo->unicorns;
//$findで任意のデータを検索する
$result = $collection->find();
//foreach
foreach($result as $entry){
//IDとnameを出力する
    echo $entry['_id'], ': ', $entry['name'], "\n";
}
?>

db : test
環境
windows10 + xampp + php7.4 + mongodb

1,db名testにコレクションunicornを作る(書き換え)
2,https://getcomposer.org/Composer-Setup.exe からcomposerをダウンロードする
phpのパッケージ管理ツールで詳しくは https://qiita.com/atwata/items/d6f1cf95ce96ebe58010
3,コンソールで作業用のディレクトリに移動(今回はc:\xampp\htdocs\git\test)
4,コンソールで''composer require mongodb/mongodb''を実行、mongodbをインストールする

入門

参考
https://laboradian.com/use-php-and-mongodb-in-wsl/