<?php

namespace application\repositories;

use application\entities\Author\Author;
use application\forms\author\UpdateForm;

class AuthorRepository
{

    public function get($id): Author
    {
        return $this->getBy(['id' => $id]);
    }/**/



    public function save(Author $author): bool
    {
        if (!$author->save()) {
            throw new \RuntimeException('Saving error.');
        }
        return true;
    }/**/



    public function remove(Author $author): void
    {
        if (!$author->delete()) {
            throw new \RuntimeException('Removing error.');
        }
    }/**/

    private function getBy(array $condition): Author
    {
        if (!$author = Author::find()->andWhere($condition)->limit(1)->one()) {
            throw new \NotFoundException('Author not found.');
        }
        return $author;
    }/**/
}/* end of Service */