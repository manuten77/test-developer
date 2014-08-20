<?php
/* @var $this BookingsController */
/* @var $model Bookings */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bookings-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'B_Id'); ?>
		<?php echo $form->textField($model,'B_Id'); ?>
		<?php echo $form->error($model,'B_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'B_DateMade'); ?>
		<?php echo $form->textField($model,'B_DateMade'); ?>
		<?php echo $form->error($model,'B_DateMade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'B_TimeMade'); ?>
		<?php echo $form->textField($model,'B_TimeMade'); ?>
		<?php echo $form->error($model,'B_TimeMade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'B_StartDate'); ?>
		<?php echo $form->textField($model,'B_StartDate'); ?>
		<?php echo $form->error($model,'B_StartDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'B_EndDate'); ?>
		<?php echo $form->textField($model,'B_EndDate'); ?>
		<?php echo $form->error($model,'B_EndDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tot_Pay_Due_Date'); ?>
		<?php echo $form->textField($model,'Tot_Pay_Due_Date'); ?>
		<?php echo $form->error($model,'Tot_Pay_Due_Date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tot_Pay_Due_Amount'); ?>
		<?php echo $form->textField($model,'Tot_Pay_Due_Amount'); ?>
		<?php echo $form->error($model,'Tot_Pay_Due_Amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tot_Pay_Made_On'); ?>
		<?php echo $form->textField($model,'Tot_Pay_Made_On'); ?>
		<?php echo $form->error($model,'Tot_Pay_Made_On'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'B_Notes_Comments'); ?>
		<?php echo $form->textArea($model,'B_Notes_Comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'B_Notes_Comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'H_Id'); ?>
		<?php echo $form->textField($model,'H_Id'); ?>
		<?php echo $form->error($model,'H_Id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->