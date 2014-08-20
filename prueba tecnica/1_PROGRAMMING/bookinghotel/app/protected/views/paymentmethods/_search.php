<?php
/* @var $this PaymentmethodsController */
/* @var $model Paymentmethods */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'P_Method_Id'); ?>
		<?php echo $form->textField($model,'P_Method_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'P_Method'); ?>
		<?php echo $form->textArea($model,'P_Method',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->