<?php

namespace application\services;

use application\forms\book\BookForm;
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

    public function add(BookForm $form,Book $book):bool
    {

        return $this->update($form,$book);

    }/**/


    public function update(BookForm $form,Book $book):bool
    {
        $book->title    = $form->title;
        $book->date_at  = $form->date_at;
        $book->author_id  = $form->author_id;


        return $this->books->save($book);

    }/**/


    public function addFromSeed(Book $book, Author $author):bool
    {

        $book->author_id = $author->id;

        return $this->books->save($book);

    }/**/

}/**/