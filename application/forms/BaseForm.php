<?php
namespace application\forms;

use application\entities\Author\Author;
use application\entities\User\User;
use yii\base\Model;

use yii\helpers\ArrayHelper;
/**
 * Author form
 */
class BaseForm extends Model
{


    public function fillFromModel($model){

        $properties = (new \ReflectionClass($this))->getProperties(\ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            $this->{$property->getName()} = $model->{$property->getName()};
        }


    }/**/




}
