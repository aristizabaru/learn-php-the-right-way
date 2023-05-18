<?php // Interface


declare(strict_types=1);

namespace App;

class CollectService
{

    // Siempre es mejor programar para una interface que para una implementación
    // la implementación puede variar y no importaría. 
    public function collect(DebtCollector $collectAgent): string
    {
        /**
         * Polimofismo
         * Esta implementación es polimórfica en cuanto puede tomar muchas
         * formas, ya que el objeto que recibe como argumento puede ser
         * de varios tipos (clases)
         * 
         * Pasaría el test de la siguiente validación:
         * $collectAgent instaneof Rocky // True
         * $collectAgent instaneof Agency // True
         */

        $ownedAmount = rand(100, 1000);
        $collected = $collectAgent->collect($ownedAmount);

        return $collected . ' out of ' . $ownedAmount . PHP_EOL;
    }
}
