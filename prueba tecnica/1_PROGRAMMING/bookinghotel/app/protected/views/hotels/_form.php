<?php
/* @var $this HotelsController */
/* @var $model Hotels */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hotels-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'H_Id'); ?>
		<?php echo $form->textField($model,'H_Id'); ?>
		<?php echo $form->error($model,'H_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'H_Name'); ?>
		<?php echo $form->textArea($model,'H_Name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'H_Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'H_Address'); ?>
		<?php echo $form->textArea($model,'H_Address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'H_Address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'H_Town'); ?>
		<?php echo $form->textArea($model,'H_Town',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'H_Town'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'H_Country'); ?>
		<?php echo $form->textArea($model,'H_Country',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'H_Country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'H_PostalCode'); ?>
		<?php echo $form->textArea($model,'H_PostalCode',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'H_PostalCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'H_Phone'); ?>
		<?php echo $form->textArea($model,'H_Phone',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'H_Phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'H_Email'); ?>
		<?php echo $form->textArea($model,'H_Email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'H_Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'H_Number_Rooms'); ?>
		<?php echo $form->textField($model,'H_Number_Rooms'); ?>
		<?php echo $form->error($model,'H_Number_Rooms'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'H_Services'); ?>
		<?php echo $form->textArea($model,'H_Services',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'H_Services'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'H_Star_Level'); ?>
		<?php echo $form->textField($model,'H_Star_Level'); ?>
		<?php echo $form->error($model,'H_Star_Level'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->