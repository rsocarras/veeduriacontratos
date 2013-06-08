<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>

<p>Congratulations! You have successfully created your Yii application.</p>


<?php $this->endWidget(); ?>


<?php		
	
/* 	Yii::import('ext.SimpleHTMLDOM.SimpleHTMLDOM');
	// Create DOM from URL or file
	$simpleHTML = new SimpleHTMLDOM;
	$html = $simpleHTML->file_get_html('https://www.contratos.gov.co/consultas/detalleProceso.do?numConstancia=13-1-92780#');
	//var_dump($html->);

	//print_r($html->find('class="gralTitulos"'));

	foreach($html->find('form') as $element)
    echo $element->action . '<br>'; 
		
	foreach($html->find('input') as $element){
 	//print_r($html);
	echo  $str = str_replace('\\', '/', $element->value);
	echo '<br>'; 
	}

*/
		



$this->widget('ext.share.SocialShareWidget', array(
    'url' => 'https://www.contratos.gov.co/consultas/detalleProceso.do?numConstancia=13-1-92780#',          //required
    'services' => array('google', 'twitter','facebook'),   //optional
    //'htmlOptions' => array('class' => 'someClass'), //optional
    'popup' => true,               //optional
));


?>

<form action="https://www.contratos.gov.co/consultas/VerDocumentoPublic" method="post">
	<input type="hidden" name="ruta" value="I:\2013\AV\117002002\13-1-92780\AV_PROCESO_13-1-92780_117002002_7295780.pdf"/>     
	<input type="submit" id="btnSubmit" class="buttonAsLink" style="text-decoration:underline;" value="Aviso"/>
</form>



