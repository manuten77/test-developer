<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'C_Id'); ?>
		<?php echo $form->textField($model,'C_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_Title'); ?>
		<?php echo $form->textArea($model,'C_Title',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_Name'); ?>
		<?php echo $form->textArea($model,'C_Name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_Surname'); ?>
		<?php echo $form->textArea($model,'C_Surname',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_DateofBirthday'); ?>
		<?php echo $form->textField($model,'C_DateofBirthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_Address'); ?>
		<?php echo $form->textArea($model,'C_Address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_Town'); ?>
		<?php echo $form->textArea($model,'C_Town',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_Country'); ?>
		<?php echo $form->textArea($model,'C_Country',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_PostalCode'); ?>
		<?php echo $form->textArea($model,'C_PostalCode',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_HomePhone'); ?>
		<?php echo $form->textArea($model,'C_HomePhone',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_MobilePhone'); ?>
		<?php echo $form->textArea($model,'C_MobilePhone',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'C_Email'); ?>
		<?php echo $form->textArea($model,'C_Email',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->