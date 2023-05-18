<?php // Interface
/**
 * Interface
 */

declare(strict_types=1);

use App\Agency;
use App\CollectService;
use App\Rocky;

require_once __DIR__ . '/../vendor/autoload.php';

echo '<pre>';

$collectService = new CollectService();

echo 'Rocky gets: $' . $collectService->collect(new Rocky);
echo 'Agency gets: $' . $collectService->collect(new Agency);
