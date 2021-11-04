<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap5\ActiveForm */
/* @var $generator denkorolkov\ajaxcrud\generators\Generator */

echo '<h3>General Configuration</h2>';
echo $form->field($generator, 'modelClass');
echo $form->field($generator, 'searchModelClass');
echo $form->field($generator, 'controllerClass');
echo $form->field($generator, 'viewPath');
echo $form->field($generator, 'baseControllerClass');
echo $form->field($generator, 'enableI18N')->checkbox();
echo $form->field($generator, 'messageCategory');
