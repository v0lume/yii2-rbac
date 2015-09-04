<?php

use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    [
        'attribute'=>'name',
        'label' => $searchModel->attributeLabels()['name'],
    ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'template' => '<div class="btn-group btn-group-xs">{view} {update} {delete}</div>',
        'dropdown' => false,
        'vAlign' => 'middle',
        'urlCreator' => function($action, $model, $key, $index) {
            return Url::to([$action, 'name' => $key]);
        },
        'viewOptions' => [
            'role' => 'modal-remote', 
            'title' => Yii::t('rbac','View'), 
            'data-toggle' => 'tooltip',
            'class' => 'btn btn-default',
        ],
        'updateOptions' => [
            'role' => 'modal-remote', 
            'title' => Yii::t('rbac','Update'), 
            'data-toggle' => 'tooltip',
            'class' => 'btn btn-default',
        ],
        'deleteOptions' => [
            'role' => 'modal-remote', 
            'title' => Yii::t('rbac','Delete'),
            'data-confirm' => false, 'data-method' => false, // for overide yii data api
            'data-request-method' => 'post',
            'data-toggle' => 'tooltip',
            'data-comfirm-ok'=>Yii::t('rbac','Ok'),
            'data-comfirm-cancel'=>Yii::t('rbac','Cancel'),
            'data-confirm-title' => Yii::t('rbac','Are you sure?'),
            'data-confirm-message' => Yii::t('rbac','Are you sure want to delete this item'),
            'class' => 'btn btn-default',
        ],
    ],
];
        