<?php
require_once 'ItemDataContext.php';
// require_once 'ItemDataContextByName.php';
require_once 'ReadFixedLengthDataStrategy.php';
require_once 'ReadTabSeparatedDataStrategy.php';

$strategy1 = new ReadFixedLengthDataStrategy('fixed_length_data.txt');
$context1 = new ItemDataContext($strategy1);
$data = $context1->getItemData();
echo '<dl>';
foreach ($data as $object) {
    echo '<dt>' . $object->item_name . '</dt>';
    echo '<dd>商品番号：' . $object->item_code . '</dd>';
    echo '<dd>\\' . number_format((int)$object->price) . '-</dd>';
    echo '<dd>' . date('Y/m/d', $object->release_date) . '発売</dd>';
}
echo '</dl>';

$strategy2 = new ReadTabSeparatedDataStrategy('tab_separated_data.txt');
$context2 = new ItemDataContext($strategy2);
$data = $context2->getItemData();
echo '<dl>';
foreach ($data as $object) {
    echo '<dt>' . $object->item_name . '</dt>';
    echo '<dd>商品番号：' . $object->item_code . '</dd>';
    echo '<dd>\\' . number_format((int)$object->price) . '-</dd>';
    echo '<dd>' . date('Y/m/d', $object->release_date) . '発売</dd>';
}
echo '</dl>';
