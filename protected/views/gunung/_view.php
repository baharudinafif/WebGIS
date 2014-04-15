<?php
/* @var $this GunungController */
/* @var $data Gunung */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama')); ?>:</b>
	<?php echo CHtml::encode($data->Nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ketinggian')); ?>:</b>
	<?php echo CHtml::encode($data->Ketinggian); ?>
	<br />


</div>