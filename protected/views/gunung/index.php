<?php
/* @var $this GunungController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gunungs',
);

$this->menu=array(
	array('label'=>'Create Gunung', 'url'=>array('create')),
	array('label'=>'Manage Gunung', 'url'=>array('admin')),
);
?>

<h1>Gunungs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
