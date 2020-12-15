<?php
#mongodbの書き込み
//composerの構成ファイル(autoload.php)を読み出して自動で構築してくれる
require 'vendor/autoload.php';
//MongoDBに接続
$client = new MongoDB\Client("mongodb://localhost:27017");
//コレクションの指定,DBやサーバー->データベース->コレクション
$collection = $client->demo->unicorns;
$result = $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );
echo "Inserted with Object ID '{$result->getInsertedId()}'";
?>