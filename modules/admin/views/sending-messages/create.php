<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\SendingMessages */

$this->title = 'Create Sending Messages';
$this->params['breadcrumbs'][] = ['label' => 'Sending Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
            </div>
            <div class="card-body">
                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>