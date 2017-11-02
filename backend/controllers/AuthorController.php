<?php

namespace backend\controllers;

use application\repositories\AuthorRepository;
use application\services\AuthorManageService;
use Yii;
use application\entities\Author\Author;
use application\entities\Author\AuthorSearch;
use application\forms\author\AuthorForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;

/**
 * AuthorController implements the CRUD actions for Author model.
 */
class AuthorController extends Controller
{
    protected $authorRepository;
    protected $service;

    public function __construct($id, $module,
                                AuthorRepository $authorRepository,
                                AuthorManageService $authorManageService,
                                $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->authorRepository = $authorRepository;
        $this->service = $authorManageService;
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
     * Lists all Author models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AuthorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Author model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findAuthor($id),
        ]);
    }

    /**
     * Creates a new Author model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $form = new AuthorForm();

        $author = new Author();

        if(!Yii::$app->request->isPost) {
            $form->fillFromModel($author);
        }

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $this->service->add($form, $author);

            Yii::$app->session->setFlash('success', "Автор успешно добавлен");
            return $this->redirect(['view', 'id' => $author->id]);
        } else {
            return $this->render('update', [
                'model' => $form,
                'author'=>$author,
            ]);
        }
    }

    /**
     * Updates an existing Author model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $form = new AuthorForm();

        $author = $this->findAuthor($id);

        if(!Yii::$app->request->isPost) {
            $form->fillFromModel($author);
        }

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $this->service->update($form, $author);
            Yii::$app->session->setFlash('success', "Автор успешно обновлен");

            return $this->redirect(['view', 'id' => $author->id]);
        } else {
            return $this->render('update', [
                'model' => $form,
                'author'=>$author,
            ]);
        }
    }/**/

    public function actionGetList($q = null, $id = null){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = ['results' => ['id' => '', 'text' => '']];
        if (!is_null($q)) {
            $query = new Query;
            $query->select('id, name AS text')
                ->from(Author::tableName())
                ->where(['like', 'name', $q])
                ->limit(20);
            $command = $query->createCommand();
            $data = $command->queryAll();
            $out['results'] = array_values($data);
        }
        elseif ($id > 0) {
            $out['results'] = ['id' => $id, 'text' => Author::find($id)->name];
        }
        return $out;
    }

    /**
     * Deletes an existing Author model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findAuthor($id){

        if (($author = $this->authorRepository->get($id)) !== null) {
            return $author;
        } else {
            throw new NotFoundHttpException('Запрашиваемый автор не найден.');
        }
    }/**/
}
