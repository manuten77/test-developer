<?php
/* @var $this RoomsController */
/* @var $model Rooms */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rooms-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'R_Id'); ?>
		<?php echo $form->textField($model,'R_Id'); ?>
		<?php echo $form->error($model,'R_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R_Type_Id'); ?>
		<?php echo $form->textField($model,'R_Type_Id'); ?>
		<?php echo $form->error($model,'R_Type_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R_Band_Id'); ?>
		<?php echo $form->textField($model,'R_Band_Id'); ?>
		<?php echo $form->error($model,'R_Band_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R_Price_Id'); ?>
		<?php echo $form->textField($model,'R_Price_Id'); ?>
		<?php echo $form->error($model,'R_Price_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R_Floor'); ?>
		<?php echo $form->textField($model,'R_Floor'); ?>
		<?php echo $form->error($model,'R_Floor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R_AdditionalNotes'); ?>
		<?php echo $form->textArea($model,'R_AdditionalNotes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'R_AdditionalNotes'); ?>
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