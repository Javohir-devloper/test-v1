<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Books */

$this->title = 'Обновить книги: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'книги', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
