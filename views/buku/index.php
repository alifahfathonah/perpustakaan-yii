<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Buku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'judul',
            [
                'label' => 'Kategori',
                'attribute' => 'id_kategori',
                'value' => function($data) {
                    return @$data->kategori->nama;
                }
            ],
            [
                'label' => 'Penulis',
                'attribute' => 'id_penulis',
                'value' => function($data) {
                    return $data->penulis->nama;
                }
            ],
            [
                'label' => 'Penerbit',
                'attribute' => 'id_penerbit',
                'value' => function($data) {
                    return $data->penerbit->nama;
                }
            ],
            //'sinopsis:ntext',
            //'tahun_terbit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
