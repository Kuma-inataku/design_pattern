<?php

require_once 'Listing.php';
require_once 'ExtendedListing.php';
require_once 'FileDataSource.php';

$list1 = new Listing(new FileDataSource('data.txt'));
$list2 = new ExtendedListing(new FileDataSource('data.txt'));

