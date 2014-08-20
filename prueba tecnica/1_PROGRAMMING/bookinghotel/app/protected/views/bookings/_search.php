<?php
/* @var $this BookingsController */
/* @var $model Bookings */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'B_Id'); ?>
		<?php echo $form->textField($model,'B_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'B_DateMade'); ?>
		<?php echo $form->textField($model,'B_DateMade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'B_TimeMade'); ?>
		<?php echo $form->textField($model,'B_TimeMade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'B_StartDate'); ?>
		<?php echo $form->textField($model,'B_StartDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'B_EndDate'); ?>
		<?php echo $form->textField($model,'B_EndDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tot_Pay_Due_Date'); ?>
		<?php echo $form->textField($model,'Tot_Pay_Due_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tot_Pay_Due_Amount'); ?>
		<?php echo $form->textField($model,'Tot_Pay_Due_Amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tot_Pay_Made_On'); ?>
		<?php echo $form->textField($model,'Tot_Pay_Made_On'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'B_Notes_Comments'); ?>
		<?php echo $form->textArea($model,'B_Notes_Comments',array('rows'=>6, 'cols'=>50)); ?>
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