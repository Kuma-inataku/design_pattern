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

var_dump($comments);
exit;