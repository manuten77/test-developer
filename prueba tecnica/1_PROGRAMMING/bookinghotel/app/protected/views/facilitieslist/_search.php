<?php
/* @var $this FacilitieslistController */
/* @var $model Facilitieslist */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'F_Id'); ?>
		<?php echo $form->textField($model,'F_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'F_Description'); ?>
		<?php echo $form->textArea($model,'F_Description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->