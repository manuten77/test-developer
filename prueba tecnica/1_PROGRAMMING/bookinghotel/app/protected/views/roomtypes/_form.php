<?php
/* @var $this RoomtypesController */
/* @var $model Roomtypes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'roomtypes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'R_Type_Id'); ?>
		<?php echo $form->textField($model,'R_Type_Id'); ?>
		<?php echo $form->error($model,'R_Type_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'R_Type'); ?>
		<?php echo $form->textArea($model,'R_Type',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'R_Type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->