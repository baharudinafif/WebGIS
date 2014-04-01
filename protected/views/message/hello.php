<?php
/* @var $this MessageController */

$this->breadcrumbs=array(
	'Message'=>array('/message'),
	'Hello',
);
?>
<h1><?php echo "Hello World!!"?></h1>

<?php
	echo $time;
	echo CHtml::link('<br>Go To : GoodBye',array('message/goodbye')); 
?>
