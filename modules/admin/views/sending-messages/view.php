<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SendingMessages */

$this->title = 'Просмотр: ' . $model->heading;
$this->params['breadcrumbs'][] = ['label' => 'Sending Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                <p class="card-category">
                    <?/*= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-transparent']) */?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы действительно желаете удалить данную запись?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
            <div class="card-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'heading',
                        'description:html',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>