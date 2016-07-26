<?php namespace Dimassrio\Laraschema\JsonSchemaValidator;

class JsonSchemaValidator
{
    public static function validate($data, $schema)
    {

        if (! is_null(json_decode($schema))) {
            $retriever = new \JsonSchema\Uri\UriRetriever;
            $validator = new \JsonSchema\Validator();
            $validator->check(json_decode($data), json_decode($schema));
            return $validator->isValid();
        }
        return true;
    }
}
