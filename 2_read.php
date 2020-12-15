<?php
//composerの構成ファイル(autoload.php)を読み出して自動で構築してくれる
require 'vendor/autoload.php';
//MongoDBに接続
$client = new MongoDB\Client("mongodb://localhost:27017");
//コレクションの指定,DBやサーバー->データベース->コレクション
$collection = $client->demo->unicorns;
//findで任意のデータを検索する
$result = $collection->find([ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );
//foreachで配列を分解して出力
foreach ($result as $entry) {
    echo $entry['_id'], ': ', $entry['name'], "\n";
}
?>