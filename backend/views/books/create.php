<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Books */

$this->title = 'Создать книги';
$this->params['breadcrumbs'][] = ['label' => 'книги', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
