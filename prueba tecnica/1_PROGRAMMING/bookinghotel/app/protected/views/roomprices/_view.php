<?php
/* @var $this RoompricesController */
/* @var $data Roomprices */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_Price_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->R_Price_Id), array('view', 'id'=>$data->R_Price_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('R_Price')); ?>:</b>
	<?php echo CHtml::encode($data->R_Price); ?>
	<br />


</div>