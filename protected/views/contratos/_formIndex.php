<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'contratos-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
	'action' => Yii::app()->createUrl('contratos/create'),  //<- your form action here
	'enableClientValidation'=>true,
	'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
)); ?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Esto es '.CHtml::encode(Yii::app()->name),
)); ?>

<H3>Puedes encontrar los contratos y Licitaciones aqui.

<?php $this->widget('bootstrap.widgets.TbButton',array(
	'url'=>'https://www.contratos.gov.co/consultas/inicioConsulta.do',
	'label' => 'Página de Contratos',
	'type' => 'primary',
	'size' => 'large',
	'htmlOptions' => array('target' => '_blank'),
)); ?></H3>


<?php $this->endWidget(); ?>  



<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textAreaRow($model,'url',array('rows'=>2, 'cols'=>50, 'class'=>'span8','placeholder' => 'Pega aquí la URL del contrato que encuentras')); ?>

	<?php echo $form->textFieldRow($model,'titulo',array('class'=>'span5','maxlength'=>255,'placeholder' => 'Escribe un título, el que tu quieras!')); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8','placeholder' => 'Escribe por que piensas que esto se deba mirar')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
