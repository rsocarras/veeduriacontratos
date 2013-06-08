<?php
$this->breadcrumbs=array(
	'Contratoses'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Contratos','url'=>array('index')),
array('label'=>'Manage Contratos','url'=>array('admin')),
);
?>

<h1>Create Contratos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>