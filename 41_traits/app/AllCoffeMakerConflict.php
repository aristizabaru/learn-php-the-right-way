<?php

declare(strict_types=1);

namespace App;

class AllCoffeMakerConflict extends CoffeMaker
{
    /**
     * Conflict resolution -> ver clase Traits\CapuccinoTraitConflict
     * Cuando hay method signature idénticas en los traits importados PHP puede entrar
     * en conflicto ya que no sabrá qué método llamar. Para solucionar esto se puede
     * usar el 'insteadof' operator
     */

    /**
     * Tanto LatteTrait como CapuccinoTraitConflict tienen un método definido
     * para hacer late, si se quiere usar la versión de CapuccinoTraitConflic
     * instead of LatteTrait se debe especificar o viceversa.
     */
    use Traits\LatteTrait;
    use Traits\CapuccinoTraitConflict {
        Traits\CapuccinoTraitConflict::makeLatte insteadof Traits\LatteTrait;
        /**
     * También se puede usar el operador 'as' para darle un alias
     * al método en conflicto:
     * CapuccinoTraitConflict::makeLatte as makeOriginalLate;
     */
    }
}
