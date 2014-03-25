<?php
$this->breadcrumbs=array(
	Dbe::t("main","Database Explorer"),
);
?>
<h1><?php echo Dbe::t("main","Database Explorer");?></h1>
<?php
$panels=array(
        Dbe::t("main","Database connection")=>$this->renderPartial('_connection',array('db'=>$db),true),
        Dbe::t("main","Schema")=>$this->renderPartial('_schema',array('db'=>$db),true),        
    );

$this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>$panels,
    'options'=>array(
        'animated'=>'bounceslide',
        'heightStyle'=>'content'
    ),
));
$this->widget('dbExplorer.widgets.slidetoggle.ESlidetoggle',
array(
     'itemSelector' => 'div.collapsible',
     'titleSelector' => 'div.collapsible h3',
     'collapsed' => 'div.collapsible.closed',
));

$this->widget('dbExplorer.extensions.EJuiTooltip',array());

?>