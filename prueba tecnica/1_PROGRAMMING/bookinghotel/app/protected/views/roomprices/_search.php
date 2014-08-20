<?php
/* @var $this RoompricesController */
/* @var $model Roomprices */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'R_Price_Id'); ?>
		<?php echo $form->textField($model,'R_Price_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'R_Price'); ?>
		<?php echo $form->textField($model,'R_Price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->