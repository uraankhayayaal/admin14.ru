<?php

namespace common\modules\smartlink\controllers;

use common\modules\smartlink\models\Smartlink;
use Yii;
use uraankhayayaal\page\models\Page;
use yii\web\NotFoundHttpException;
use yii\web\Controller;

/**
 * Front controller
 */
class FrontController extends Controller
{
    public function actionIndex(String $id)
    {
        $model = $this->findModel($id);
        if($model->getPlatformLink() !== null){
            return $this->redirect($model->getPlatformLink());
        }else{
            return $this->render('index', [
                'error' => 'Platform detected no mobile device'
            ]);
        }
    }

    protected function findModel($link_hash): Smartlink
    {
        if (($model = Smartlink::findOneByHash($link_hash)) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}