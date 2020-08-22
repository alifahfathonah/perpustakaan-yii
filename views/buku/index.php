<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bukus';
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

            'id',
            'judul',
            'id_kategori',
            'id_penulis',
            'id_penerbit',
            //'sinopsis:ntext',
            //'tahun_terbit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
