<?php
/* @var $this GuestsController */
/* @var $model Guests */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'guests-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'G_Id'); ?>
		<?php echo $form->textField($model,'G_Id'); ?>
		<?php echo $form->error($model,'G_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'G_Title'); ?>
		<?php echo $form->textArea($model,'G_Title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'G_Title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'G_Name'); ?>
		<?php echo $form->textArea($model,'G_Name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'G_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'G_Surname'); ?>
		<?php echo $form->textArea($model,'G_Surname',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'G_Surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'G_DateofBirthday'); ?>
		<?php echo $form->textField($model,'G_DateofBirthday'); ?>
		<?php echo $form->error($model,'G_DateofBirthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'G_Address'); ?>
		<?php echo $form->textArea($model,'G_Address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'G_Address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'G_Town'); ?>
		<?php echo $form->textArea($model,'G_Town',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'G_Town'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'G_Country'); ?>
		<?php echo $form->textArea($model,'G_Country',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'G_Country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'G_PostalCode'); ?>
		<?php echo $form->textArea($model,'G_PostalCode',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'G_PostalCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'G_ContactPhone'); ?>
		<?php echo $form->textArea($model,'G_ContactPhone',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'G_ContactPhone'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->