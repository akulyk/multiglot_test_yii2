<?php

namespace application\repositories;

use application\entities\Author\Book;
use application\forms\book\UpdateForm;

class BookRepository
{

    public function get($id): Book
    {
        return $this->getBy(['id' => $id]);
    }/**/

    public function getByAuthorID($id): Book
    {
        return $this->getBy(['author_id' => $id]);
    }/**/

   

    public function save(Book $book): bool
    {
        if (!$book->save()) {
            throw new \RuntimeException('Saving error.');
        }
        return true;
    }/**/



    public function remove(Book $book): void
    {
        if (!$book->delete()) {
            throw new \RuntimeException('Removing error.');
        }
    }/**/

    private function getBy(array $condition): Book
    {
        if (!$book = Book::find()->andWhere($condition)->limit(1)->one()) {
            throw new \NotFoundException('Book not found.');
        }
        return $book;
    }/**/
}/* end of Service */