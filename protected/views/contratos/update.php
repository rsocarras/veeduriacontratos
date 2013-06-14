<?php
$this->breadcrumbs=array(
	'Contratoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Contratos','url'=>array('index')),
	array('label'=>'Create Contratos','url'=>array('create')),
	array('label'=>'View Contratos','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Contratos','url'=>array('admin')),
	);
	?>

	<h1>Update Contratos <?php 


	echo $model->id; ?></h1>

<?php 


echo $this->renderPartial('_form',array('model'=>$model)); ?>