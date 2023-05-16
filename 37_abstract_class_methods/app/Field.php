<?php // Clase abstracta

/**
 * Clase abstracta
 * Para empezar a entender el principio del Polimorfismo es necesario entender
 * las clases abstractas. Las clases abstractas son como la plantilla que luego
 * usarán las clases derivadas o hijos de ella.
 * 
 * Reglas de las clases abstractas
 * 1. No se pueden instanciar, solo se pueden extender, por lo que no es posible
 * crear objetos a partir de la clase abstracta.
 * 
 * 2. Puede tener métodos abstractos en compañía de métodos y propiedades regulares.
 * La clase abstracta sabe el 'qué' pero no sabe el 'cómo'.
 * 
 * 3. Todas las clases secundarias de una clase abstracta deben implementar sus
 * métodos abstractos.
 * 
 * Usos
 * Las clases abstractas se deberían de implementar cuando se quiere forzar
 * la implementación de algunos métodos definidos en ella y a su vez
 * tener disponible algunas funcionalidades básicas que serán heradadas.
 * Si la clase abstracta solo tiene métodos abstractos es mejor usar
 * una interfaz en su lugar
 */

declare(strict_types=1);

namespace App;

// Se declara una clase abstracta usando la palabra reservada 'abstract'
abstract class Field
{
    // El constructor se mantiene público y la propiedad protected
    public function __construct(protected string $name)
    {
    }

    /**
     * Los métodos abstractos solo se declaran, estos deben ser implementados
     * por las clases hijas.
     * 
     * A su vez los abstract methods no pueden ser private porque simplemente
     * no se podrían heredar, solo se admite public o protected
     */
    abstract public function render(): string;
}
