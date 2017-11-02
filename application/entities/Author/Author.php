<?php

namespace application\entities\Author;

use Yii;
use application\entities\User\User;

/**
 * This is the model class for table "{{%student}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $birthdate

 *
 * @property Book $books
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%author}}';
    }

    /**
     * @inheritdoc
     */

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'birthday' => 'Дата рождения',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['author_id' => 'id']);
    }/**/

    public static function create(string $name, string $birthday): self
    {
        $author = new Author();
        $author->name    = $name;
        $author->birthday    = $birthday;

        return $author;
    }/**/


}/* end of Entity */
