<?php
$this->breadcrumbs=array(
	'Contratoses'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Contratos','url'=>array('index')),
array('label'=>'Create Contratos','url'=>array('create')),
array('label'=>'Update Contratos','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Contratos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Contratos','url'=>array('admin')),
);
?>

<h1>View Contratos #<?php echo $model->id; ?></h1>

<?php

var_dump($model);

 $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'url',
		'titulo',
		'description',
),
)); 


	$this->widget('ext.share.SocialShareWidget', array(
    'url' => $model->url,          //required
    'services' => array('google', 'twitter','facebook'),   //optional
    //'htmlOptions' => array('class' => 'someClass'), //optional
    'popup' => true,              	 //optional
));
?>
