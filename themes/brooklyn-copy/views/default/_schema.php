<?php
$this->widget('zii.widgets.jui.CJuiTabs',array(
    'tabs'=>array(
        Dbe::t("main","Tables / Views") => array(
            'id'=>'tab1',
            'content'=>$this->renderPartial('_tables',array('db'=>$db),true)
            ),
        Dbe::t("main","Data Mapping") => array(
            'id'=>'tab2',
            'content'=>$this->renderPartial('_mapping',array('db'=>$db),true)
            ),
    ),
    // additional javascript options for the tabs plugin
    'options'=>array(
        'collapsible'=>true,
    ),
));

?>