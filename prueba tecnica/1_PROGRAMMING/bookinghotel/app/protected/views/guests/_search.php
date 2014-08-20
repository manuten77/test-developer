<?php
/* @var $this GuestsController */
/* @var $model Guests */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'G_Id'); ?>
		<?php echo $form->textField($model,'G_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'G_Title'); ?>
		<?php echo $form->textArea($model,'G_Title',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'G_Name'); ?>
		<?php echo $form->textArea($model,'G_Name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'G_Surname'); ?>
		<?php echo $form->textArea($model,'G_Surname',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'G_DateofBirthday'); ?>
		<?php echo $form->textField($model,'G_DateofBirthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'G_Address'); ?>
		<?php echo $form->textArea($model,'G_Address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'G_Town'); ?>
		<?php echo $form->textArea($model,'G_Town',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'G_Country'); ?>
		<?php echo $form->textArea($model,'G_Country',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'G_PostalCode'); ?>
		<?php echo $form->textArea($model,'G_PostalCode',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'G_ContactPhone'); ?>
		<?php echo $form->textArea($model,'G_ContactPhone',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->