<?php
/* @var $this RoomtypesController */
/* @var $model Roomtypes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'R_Type_Id'); ?>
		<?php echo $form->textField($model,'R_Type_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'R_Type'); ?>
		<?php echo $form->textArea($model,'R_Type',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->