<?php // Magic Methods

/**
 * Magic Methods
 * Los métodos mágicos son métodos especiales que sobreescriben acciones
 * por defecto cuando se realizan ciertas acciones sobre un objeto.
 * 
 * Los siguientes nombres de métodos se consideran mágicos:
 * __construct(), __destruct(), __call(), __callStatic(), __get(),
 * __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(),
 * __unserialize(), __toString(), __invoke(), __set_state(), __clone(),
 * y __debugInfo().
 * 
 * Documentación:
 * https://www.php.net/manual/es/language.oop5.magic.php
 */

declare(strict_types=1);

namespace App;

class DebugInfo
{
    private float $amount = 100;
    private int $id = 10;
    private string $acountNumber = '125-7684-9879';
    /**
     * __debug
     * Es invocado cuando se hace un var_dumb al objecto.
     * 
     * Este método es muy importante cuando no se quiere mostrar información importante
     * ya que un var_dumb mostrará todas las propiedades inclusive las privadas
     */

    public function __debugInfo(): ?array
    {
        return [
            'id' => $this->id,
            'accountNumber' => '*******' . substr($this->acountNumber, -4)
        ];
    }
}
