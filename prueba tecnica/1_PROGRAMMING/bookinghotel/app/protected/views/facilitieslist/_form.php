<?php
/* @var $this FacilitieslistController */
/* @var $model Facilitieslist */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'facilitieslist-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'F_Id'); ?>
		<?php echo $form->textField($model,'F_Id'); ?>
		<?php echo $form->error($model,'F_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'F_Description'); ?>
		<?php echo $form->textArea($model,'F_Description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'F_Description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->