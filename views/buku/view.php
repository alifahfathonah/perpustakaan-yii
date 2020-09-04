<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */

$this->title = $model->judul;
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="buku-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
    
            'judul',
            [
                'label' => 'Kategori',
                'attribute' => 'id_kategori',
                'value' => $model->kategori->nama
            ],
            [
                'label' => 'Penulis',
                'attribute' => 'id_penulis',
                'value' => $model->penulis->nama
            ],
            [
                'label' => 'Penerbit',
                'attribute' => 'id_penerbit',
                'value' => $model->penerbit->nama
            ],
            'sinopsis:ntext',
            'tahun_terbit',
        ],
    ]) ?>

</div>
