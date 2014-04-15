<?php
/* @var $this GunungController */
/* @var $model Gunung */

$this->breadcrumbs=array(
	'Gunungs'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Gunung', 'url'=>array('index')),
	array('label'=>'Create Gunung', 'url'=>array('create')),
	array('label'=>'Update Gunung', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Gunung', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gunung', 'url'=>array('admin')),
);
?>

<h1>View Gunung #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Nama',
		'Ketinggian',
	),
)); ?>
