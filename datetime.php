<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

$Jakarta_now = carbon::now('Asia/Jakarta');

echo "Sekarang di Jakarta: $Jakarta_now";

?>