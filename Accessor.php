<?php
namespace App\Http\Cars;
use ReflectionClass;
use Exception;
class Accessor
{

    public function getProperties() : array
    {
        $attributes_list = [];
        $reflect = new ReflectionClass($this);
        try {
            $instance = $reflect->newInstance();
            foreach ($reflect->getProperties() as $attribute) {
                $attribute->setAccessible(true);
                array_push($attributes_list,
                    array($attribute->getName() => $attribute->getValue($instance))
                );
            }

            return call_user_func_array('array_merge', $attributes_list);

        } catch (Exception $exception) {
            return ['error' => $exception->getMessage()];
        }

    }
    public function get( $property_name)
    {
        return $this->$property_name;
    }

}
