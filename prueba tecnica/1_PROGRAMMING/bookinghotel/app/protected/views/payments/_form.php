<?php
/* @var $this PaymentsController */
/* @var $model Payments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'payments-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'P_Id'); ?>
		<?php echo $form->textField($model,'P_Id'); ?>
		<?php echo $form->error($model,'P_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'B_Id'); ?>
		<?php echo $form->textField($model,'B_Id'); ?>
		<?php echo $form->error($model,'B_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_Id'); ?>
		<?php echo $form->textField($model,'C_Id'); ?>
		<?php echo $form->error($model,'C_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_Method_Id'); ?>
		<?php echo $form->textField($model,'P_Method_Id'); ?>
		<?php echo $form->error($model,'P_Method_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_Amount'); ?>
		<?php echo $form->textField($model,'P_Amount'); ?>
		<?php echo $form->error($model,'P_Amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'P_Comments'); ?>
		<?php echo $form->textArea($model,'P_Comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'P_Comments'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->