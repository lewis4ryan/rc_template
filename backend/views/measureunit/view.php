<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Measureunit */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Đơn vị đo lường', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="measureunit-view">


    <p>
        <?= Html::a('Tạo mới', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có muốn xóa đơn vị này?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'comment',
            'created',
            'updated',
        ],
    ]) ?>

</div>
