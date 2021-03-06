<?php

namespace backend\controllers;

use Yii;
use application\entities\Author\Book;
use application\entities\Author\BookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use application\forms\book\BookForm;
use application\repositories\BookRepository;
use application\services\BookManageService;

/**
 * BookController implements the CRUD actions for Book model.
 */
class BookController extends Controller
{
    protected $bookRepository;
    protected $service;

    public function __construct($id, $module,
                                BookRepository $bookRepository,
                                BookManageService $bookManageService,
                                $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->bookRepository = $bookRepository;
        $this->service = $bookManageService;
    }
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Book models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Book model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findBook($id),
        ]);
    }

    /**
     * Creates a new Book model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Book();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Book model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {

        $book = $this->findBook($id);
        $form = new BookForm($book);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $this->service->update($form, $book);
            Yii::$app->session->setFlash('success', "Книга успешно обновлена");
            return $this->redirect(['view', 'id' => $book->id]);
        } else {
            return $this->render('update', [
                'model' => $form,
                'book' => $book,
            ]);
        }
    }

    /**
     * Deletes an existing Book model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Book model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Book the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findBook($id){

        if (($book = $this->bookRepository->get($id)) !== null) {
            return $book;
        } else {
            throw new NotFoundHttpException('Запрашиваемый автор не найден.');
        }
    }/**/
}
