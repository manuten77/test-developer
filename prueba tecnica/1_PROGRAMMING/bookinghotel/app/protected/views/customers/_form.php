<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'C_Id'); ?>
		<?php echo $form->textField($model,'C_Id'); ?>
		<?php echo $form->error($model,'C_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_Title'); ?>
		<?php echo $form->textArea($model,'C_Title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'C_Title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_Name'); ?>
		<?php echo $form->textArea($model,'C_Name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'C_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_Surname'); ?>
		<?php echo $form->textArea($model,'C_Surname',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'C_Surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_DateofBirthday'); ?>
		<?php echo $form->textField($model,'C_DateofBirthday'); ?>
		<?php echo $form->error($model,'C_DateofBirthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_Address'); ?>
		<?php echo $form->textArea($model,'C_Address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'C_Address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_Town'); ?>
		<?php echo $form->textArea($model,'C_Town',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'C_Town'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_Country'); ?>
		<?php echo $form->textArea($model,'C_Country',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'C_Country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_PostalCode'); ?>
		<?php echo $form->textArea($model,'C_PostalCode',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'C_PostalCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_HomePhone'); ?>
		<?php echo $form->textArea($model,'C_HomePhone',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'C_HomePhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_MobilePhone'); ?>
		<?php echo $form->textArea($model,'C_MobilePhone',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'C_MobilePhone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'C_Email'); ?>
		<?php echo $form->textArea($model,'C_Email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'C_Email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->