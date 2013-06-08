<div class="well">
	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
	<?php $this->widget('ext.share.SocialShareWidget', array(
    'url' => $data->url,          //required
    'services' => array('google', 'twitter','facebook'),   //optional
    'popup' => true,              	 //optional
	)); ?>
	<br />

</div>