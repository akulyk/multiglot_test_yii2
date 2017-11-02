<?php

namespace application\entities\Author;

use Yii;
use application\entities\User\User;

/**
 * This is the model class for table "{{%student}}".
 *
 * @property integer $id
 * @property string $title
 * @property integer $author_id
 * @property string $date_at
 *
 * @property Author $author
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%book}}';
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
            'title' => 'Название',
            'author_id' => 'Автор',
            'author' => 'Автор',
            'date_at' => 'Дата появления на сайте',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), [ 'id' => 'author_id' ]);
    }/**/

    public static function create(string $title, string $date_at, integer $author_id = null): self
    {
        $book = new Book();
        $book->title    = $title;
        $book->author_id    = $author_id;
        $book->date_at    = $date_at;

        return $book;
    }/**/

    public function getDateFormatted(){
        return date('d.m.Y h:i:s',strtotime($this->date_at));
    }/**/


    public function getAuthorName(){
        if($this->author){
            return $this->author->name;
        }

    }/**/


}/* end of Entity */
