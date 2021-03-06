<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Kategori;
use app\models\Penulis;
use app\models\Penerbit;

$categories = Kategori::find()->all();
$authors = Penulis::find()->all();
$publisher = Penerbit::find()->all();

$listKategori = ArrayHelper::map($categories,'id','nama');
$listPenulis = ArrayHelper::map($authors,'id','nama');
$listPenerbit = ArrayHelper::map($publisher,'id','nama');

/* @var $this yii\web\View */
/* @var $model app\models\Buku */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="buku-form">

    <?php $form = ActiveForm::begin(); ?>   

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kategori')->dropDownList($listKategori, ['prompt'=>'- Pilih -']); ?>

    <?= $form->field($model, 'id_penulis')->dropDownList($listPenulis, ['prompt'=>'- Pilih -']); ?>

    <?= $form->field($model, 'id_penerbit')->dropDownList($listPenerbit, ['prompt'=>'- Pilih -']); ?>

    <?= $form->field($model, 'sinopsis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tahun_terbit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
