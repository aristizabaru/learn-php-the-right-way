<?php // Interface

declare(strict_types=1);

namespace App;

// Para implementar una interface se usa la keyword 'implements'
// Una clase puede implementar varias interfaces separadas por ,
class Rocky implements DebtCollector
{
    public function collect(float $owedAmount): float
    {
        // Rocky siempre consigue 70%
        $guaranteed = $owedAmount * 0.7;

        return $guaranteed;
    }
}
