<?php
/* @var $this GunungController */
/* @var $model Gunung */

$this->breadcrumbs=array(
	'Gunungs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gunung', 'url'=>array('index')),
	array('label'=>'Manage Gunung', 'url'=>array('admin')),
);
?>

<h1>Create Gunung</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>