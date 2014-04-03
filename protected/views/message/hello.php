<?php
/* @var $this MessageController */

	$this->breadcrumbs=array('Message'=>array('/message'),'Hello',);
	$connection = Yii::app()->db;
?>
<h1><?php echo "Hello World!!"?></h1>

<?php
	echo $time;
	$result=$connection->createCommand()
		-> select('*')
		-> from ('Gunung')
		-> query();
	foreach($result as $row){
		echo "<br>" . $row['Nama']." Ketinggian : " . $row['Ketinggian'];
	}
	echo CHtml::link('<br>Go To : GoodBye',array('message/goodbye')); 
	
?>
