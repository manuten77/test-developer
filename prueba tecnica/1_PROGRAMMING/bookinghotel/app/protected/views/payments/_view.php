<?php
/* @var $this PaymentsController */
/* @var $data Payments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('P_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->P_Id), array('view', 'id'=>$data->P_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('B_Id')); ?>:</b>
	<?php echo CHtml::encode($data->B_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('C_Id')); ?>:</b>
	<?php echo CHtml::encode($data->C_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('P_Method_Id')); ?>:</b>
	<?php echo CHtml::encode($data->P_Method_Id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('P_Amount')); ?>:</b>
	<?php echo CHtml::encode($data->P_Amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('P_Comments')); ?>:</b>
	<?php echo CHtml::encode($data->P_Comments); ?>
	<br />


</div>