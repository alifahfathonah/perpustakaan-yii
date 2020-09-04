<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use app\models\Penerbit;

/* @var $this yii\web\View */
/* @var $model app\models\Penerbit */

// var_dump($listBuku);

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Penerbit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penerbit-view">

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
            'nama',
            'telepon',
            'email:email',
            'alamat:ntext',
        ],
    ]) ?>  

    <table class="table table-bordered">
        <thead>
            <th style="width:50px">No</th>
            <th>Daftar Buku</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no = 1;?>
            <?php foreach($model->findAllBuku() as $buku) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $buku->judul ?></td>
                    <td>
                    <?= Html::a('Edit', ['buku/update', 'id' => $buku->id], ['class' => 'btn btn-primary']) ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>  
    
</div>



