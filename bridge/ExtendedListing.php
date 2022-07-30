<?php

require_once 'Listing.php';

class ExtendedListing extends Listing
{
    public function __construct($data_source)
    {
        parent::__construct($data_source);
    }

    public function readWidthEncode()
    {
        return htmlspecialchars($this->read(), ENT_QUOTES, mb_internal_encoding());
    }
}