<?php
/* @var $this PaymentsController */
/* @var $model Payments */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'P_Id'); ?>
		<?php echo $form->textField($model,'P_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'B_Id'); ?>
		<?php echo $form->textField($model,'B_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_Id'); ?>
		<?php echo $form->textField($model,'C_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'P_Method_Id'); ?>
		<?php echo $form->textField($model,'P_Method_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'P_Amount'); ?>
		<?php echo $form->textField($model,'P_Amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'P_Comments'); ?>
		<?php echo $form->textArea($model,'P_Comments',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->