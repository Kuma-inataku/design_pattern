<?php

require_once 'ReadItemDataStrategy.php';

class ReadFixedLengthDataStrategy extends ReadItemDataStrategy
{
    protected function readData($filename): array
    {
        $fp = fopen($filename, 'r');

        $dummy = fgets($fp, 4096);

        $return_value = [];
        while ($buffer = fgets($fp, 4096)) {
            $item_name = trim(substr($buffer, 0, 20));
            $item_code = trim(substr($buffer, 20, 10));
            $price = trim(substr($buffer, 30, 8));
            $release_date = trim(substr($buffer, 38));

            $obj = new stdClass();
            $obj->item_name = $item_name;
            $obj->item_code = $item_code;
            $obj->price = $price;
            $obj->release_date = mktime(0, 0, 0, (int) substr($release_date, 4, 2), (int)substr($release_date, 6, 2), (int)substr($release_date, 0, 4));
            $return_value[] = $obj;
        }

        fclose($fp);

        return $return_value;
    }
}