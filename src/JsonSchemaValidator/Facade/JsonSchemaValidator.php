<?php namespace Dimassrio\Laraschema\JsonSchemaValidator\Facades;

use Illuminate\Support\Facades\Facade;

class JsonSchemaValidator extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'jsonSchemaValidator'; }
}
