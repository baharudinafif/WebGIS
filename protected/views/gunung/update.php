<?php
/* @var $this GunungController */
/* @var $model Gunung */

$this->breadcrumbs=array(
	'Gunungs'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gunung', 'url'=>array('index')),
	array('label'=>'Create Gunung', 'url'=>array('create')),
	array('label'=>'View Gunung', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Gunung', 'url'=>array('admin')),
);
?>

<h1>Update Gunung <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>