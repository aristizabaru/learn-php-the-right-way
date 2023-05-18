<?php // Interface

declare(strict_types=1);

namespace App;

// Para implementar una interface se usa la keyword 'implements'
// Una clase puede implementar varias interfaces separadas por ,
class Agency implements DebtCollector
{
    public function collect(float $owedAmount): float
    {
        // Lo mínimo que retorna esta agencia
        $guaranteed = $owedAmount * 0.5;

        // Siempre retorna entre lo mínimo y lo que se debe
        $collected = rand((int)$guaranteed, (int)$owedAmount);

        return (float)$collected;
    }
}
