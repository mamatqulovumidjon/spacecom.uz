<?php

/* @var $this yii\web\View */
/* @var $model backend\models\Faq */

$this->title = Yii::t('app', 'Create Faq');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Faqs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
