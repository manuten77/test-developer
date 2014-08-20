<?php
/* @var $this RoomsController */
/* @var $model Rooms */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'R_Id'); ?>
		<?php echo $form->textField($model,'R_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'R_Type_Id'); ?>
		<?php echo $form->textField($model,'R_Type_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'R_Band_Id'); ?>
		<?php echo $form->textField($model,'R_Band_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'R_Price_Id'); ?>
		<?php echo $form->textField($model,'R_Price_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'R_Floor'); ?>
		<?php echo $form->textField($model,'R_Floor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'R_AdditionalNotes'); ?>
		<?php echo $form->textArea($model,'R_AdditionalNotes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'H_Id'); ?>
		<?php echo $form->textField($model,'H_Id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->