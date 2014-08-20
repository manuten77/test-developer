<?php
/* @var $this PaymentmethodsController */
/* @var $data Paymentmethods */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('P_Method_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->P_Method_Id), array('view', 'id'=>$data->P_Method_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('P_Method')); ?>:</b>
	<?php echo CHtml::encode($data->P_Method); ?>
	<br />


</div>