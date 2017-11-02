<?php
namespace console\controllers;

use application\entities\Author\Author;
use application\entities\Author\Book;
use application\services\BookManageService;
use application\entities\User\User;
use yii\console\Controller;
use Yii;

class SeederController extends Controller
{
    protected  $service;
    protected $faker;
    public function __construct($id, $module,
                                BookManageService $bookManageService,
                                $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $bookManageService;
        $this->faker = \Faker\Factory::create();
    }

    public function actionSeed($q = 1){

        for($i = 1;$i<=$q;$i++) {
            $user = $this->addUser();
            $user->save();
            $author = $this->addAuthor();
            $author->save();
            $book = $this->addBook();
            $this->service->addFromSeed($book,$author);

            $this->stdout("User - " . $user->email . ' created!'.PHP_EOL);
            $this->stdout("Author - " . $author->name . ' created!'.PHP_EOL);
            $this->stdout("Book - " . $book->title . ' created!'.PHP_EOL);
            $this->stdout("======================================".PHP_EOL);
        }
    }/**/

    protected function addUser(){
        $user = User::create($this->faker->email,'secret');
        return $user;
    }/**/

    protected function addAuthor(){

        $rand = rand(1,2);
        $name = $rand == 1 ? $this->faker->firstNameMale :$this->faker->firstNameFemale;
        $name .= ' '.$this->faker->lastName;
        $birthdate= $this->faker->dateTimeBetween('-40 years', '-18 years');


        $author = Author::create($name,$birthdate->format("d/m/Y"));

        return $author;
    }/**/

    protected function addBook(){

        $title = $this->faker->sentence(3, false);
        $date_at = $this->faker->dateTimeBetween('-10 days', '+18 days') ;

        $book = Book::create($title,$date_at->format('Y-m-d H:i:s'));
        return $book;
    }/**/



}/* end of Controller */