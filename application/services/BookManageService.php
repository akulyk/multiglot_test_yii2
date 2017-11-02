<?php

namespace application\services;

use application\forms\author\UpdateForm;
use application\entities\Author\Author;
use application\entities\Author\Book;
use application\repositories\BookRepository;

class BookManageService
{

    private $books;

    public function __construct(BookRepository $books)
    {
        $this->books = $books;

    }/**/


    public function update(UpdateForm $form,Book $book):bool
    {
        $book->title    = $form->name;
        $book->date_at  = $form->date_at;
        $book->author_id  = $form->author_id;

        return $this->book->save($book);

    }/**/

    public function add(Book $book, Author $author):bool
    {

        $book->author_id = $author->id;

        return $this->books->save($book);

    }/**/

}/**/