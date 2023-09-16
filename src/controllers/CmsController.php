<?php

/*
 * This file is part of the ircsasw/yii2-cms project.
 *
 * (c) IRCSA Software! <http://ircsasoftware.com.mx/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Ircsasw\cms\controllers;

use yii\web\Controller;

class CmsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                ],
            ],
        ];
    }

    /**
     * Algo
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index', [
        ]);
    }
}
