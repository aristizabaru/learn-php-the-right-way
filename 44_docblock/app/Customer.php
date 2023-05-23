<?php

/*
 * DockBlock
 * Dockblocks se usan principalmente para documentar clases, propiedades y métodos
 * en PHP, si bien su uso se ha ido disminuyendo por la constante implementación
 * de tipos dentro del lenguaje, lo cual hace este proceso en ciertas ocaciones
 * redundante.
 * 
 * Documentación:
 * https://docs.phpdoc.org/3.0/guide/guides/docblocks.html
 */

namespace App;


class Customer
{
    public function __construct(public string $name)
    {
    }
}
