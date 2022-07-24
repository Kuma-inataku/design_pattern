<?php

require 'MenuPrototype.php';
require 'MenuManager.php';
require 'DeepCopyMenu.php';
require 'ShallowCopyMenu.php';

// メニューマネージャーのインスタンス化
$manager = new MenuManager();

// ディープコピーインスタンス
$menu = new DeepCopyMenu('P001', 'ボロネーゼ', 1350, 'pasta');
$comments = new \stdClass();
$comments->comment[] = [
    'date' => '2018-06-23',
    'comment' => 'イタリアのトマトたっぷり。'
];
$comments->comment[] = [
    'date' => '2018-06-25',
    'comment' => '大盛無料です。'
];

$menu->setComments($comments);
$manager->register($menu);

// シャローコピーインスタンス
$menu = new ShallowCopyMenu('P002', 'ナポリタン', 1100, 'pasta');
$comments = new \stdClass();
$comments->comment[] = [
    'date' => '2018-06-23',
    'comment' => '昔なつかしい味に仕上げました。'
];
$comments->comment[] = [
    'date' => '2018-06-25',
    'comment' => '大盛無料です'
];
$menu->setComments($comments);
$manager->register($menu);

$menu1 = $manager->create('P001');
$menu2 = $manager->create('P002');

$menu1->cngComment(1,  [ 'date' => '2018-06-27', 'comment' => '大盛サービスは終了しました。']);

echo $menu1->display();
echo $menu2->display();

// var_dump($menu1);
// var_dump($menu2);
// exit;