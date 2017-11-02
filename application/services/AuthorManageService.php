<?php

namespace application\services;

use application\forms\author\AuthorForm;
use application\forms\author\UpdateForm;
use application\entities\Author\Author;

use application\repositories\AuthorRepository;

class AuthorManageService
{


    private $authors;

    public function __construct(AuthorRepository $authors)
    {
        $this->authors = $authors;

    }/**/


    public function add(AuthorForm $form,Author $author):bool
    {


        return $this->update($form,$author);

    }/**/

    public function update(AuthorForm $form,Author $author):bool
    {
        $author->name          = $form->name;
        $author->birthday      = $form->birthday;

        return $this->authors->save($author);

    }/**/

}