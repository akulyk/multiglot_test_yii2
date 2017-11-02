<?php
namespace application\forms\author;

use application\entities\Author\Author;
use application\entities\User\User;
use yii\base\Model;

use yii\helpers\ArrayHelper;
/**
 * Author form
 */
class AuthorForm extends Model
{
    public $name;
    public $birthday;





    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name','birthday'],'required'],
            [['name','birthday'],'string'],
            ['birthday', 'match', 'pattern' => '/^(0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/[0-9]{2}$/i']
        ];
    }/**/

    public function fillFromModel(Author $author){

        $properties = (new \ReflectionClass($this))->getProperties(\ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            $this->{$property->getName()} = $author->{$property->getName()};
        }


    }/**/




}
