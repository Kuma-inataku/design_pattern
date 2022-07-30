<?php
require_once 'ReadItemDataStrategy.php';

/**
 * タブ区切りデータを読み込む
 * ConcreteStrategyに相当する
 */
class ReadTabSeparatedDataStrategy extends ReadItemDataStrategy
{
    /**
     * データファイルを読み込み、オブジェクトの配列で返す
     * @param string データファイル名
     * @return データオブジェクトの配列
     */
    protected function readData($filename): array
    {
        $fp = fopen($filename, 'r');

        $dummy = fgets($fp, 4096);

        $return_value = [];
        while ($buffer = fgets($fp, 4096)) {
            [$item_code, $item_name, $price, $release_date] = preg_split("\t", $buffer);

            $obj = new stdClass();
            $obj->item_name = $item_name;
            $obj->item_code = $item_code;
            $obj->price = $price;
            [$year, $mon, $day] = preg_split('/', $release_date);
            $obj->release_date = mktime(0, 0, 0, $mon, $day, $year);

            $return_value[] = $obj;
        }

        fclose($fp);

        return $return_value;
    }
}
