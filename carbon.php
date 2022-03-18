<?php
require 'vendor/autoload.php';

// Document: https://carbon.nesbot.com/docs/

use Carbon\Carbon;

echo "今日の0時ちょうど\n";
echo Carbon::today()->format('Y-m-d H:i:s');
echo "\n\n";
echo "7日後の23:59:59\n";
echo Carbon::now()->addDays(7)->format('Y-m-d 23:59:59');
echo "\n\n";
echo "今月最初の日の0時ちょうど\n";
echo Carbon::now()->firstOfMonth()->format('Y-m-d H:i:s');
echo "\n\n";
echo "今月最後の日の23:59:59\n";
echo Carbon::now()->endOfMonth()->format('Y-m-d H:i:s');
echo "\n\n";
