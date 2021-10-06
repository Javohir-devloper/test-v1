<?php

/* @var $this yii\web\View */

use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\widgets\ListView;

$this->title = 'Книги';
?>
<div class="site-index">
    <div class="body-content">
        <?php
        $dataProvider = new ActiveDataProvider([
            'query' => $model,
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'name',
                'author',
                'genre',
                'count_1',
                [
                    'label' => 'status',
                    'value' => function ($model) {
                        if ($model->status == 1){
                            return 'активный';
                        }else{
                            return 'неактивный';
                        }
                    }
                ]
            ],
        ]);
        ?>
    </div>
</div>
