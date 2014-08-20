<?php
/* @var $this HotelsController */
/* @var $model Hotels */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'H_Id'); ?>
		<?php echo $form->textField($model,'H_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'H_Name'); ?>
		<?php echo $form->textArea($model,'H_Name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'H_Address'); ?>
		<?php echo $form->textArea($model,'H_Address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'H_Town'); ?>
		<?php echo $form->textArea($model,'H_Town',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'H_Country'); ?>
		<?php echo $form->textArea($model,'H_Country',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'H_PostalCode'); ?>
		<?php echo $form->textArea($model,'H_PostalCode',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'H_Phone'); ?>
		<?php echo $form->textArea($model,'H_Phone',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'H_Email'); ?>
		<?php echo $form->textArea($model,'H_Email',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'H_Number_Rooms'); ?>
		<?php echo $form->textField($model,'H_Number_Rooms'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'H_Services'); ?>
		<?php echo $form->textArea($model,'H_Services',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'H_Star_Level'); ?>
		<?php echo $form->textField($model,'H_Star_Level'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->