<?php
/* @var $this RoombandsController */
/* @var $model Roombands */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'R_Band_Id'); ?>
		<?php echo $form->textField($model,'R_Band_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'R_Band_Description'); ?>
		<?php echo $form->textArea($model,'R_Band_Description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->