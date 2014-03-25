<h2><?php echo Dbe::t("main","Metadata for Tables / Views");?></h2>
<?php $tableNames=$db->schema->getTableNames(); ?>
<?php foreach($tableNames as $tableName): ?>
<div  class="collapsible closed">
<h3 title="<?php echo Dbe::t("main","Click me to show more or less!");?>"><?php echo '&nbsp;',$tableName, '&nbsp;(', Dbe::countItems($tableName),'&nbsp;',Dbe::t("main","rows"),')';?></h3>
<?php
$colData=array();
$table=$db->schema->getTable($tableName);

foreach($table->getColumnNames() as $columnName){
    $column=$table->getColumn($columnName);
    $colData[]=array(
        'name'=>$column->name,
        'dbType'=>$column->dbType,
        'allowNull'=>$column->allowNull,
        'size'=>$column->size,
        'precision'=>$column->precision,
        'isPrimaryKey'=>$column->isPrimaryKey,
        'isForeignKey'=>$column->isForeignKey,
        'autoIncrement'=>$column->autoIncrement,
        'comment'=>$column->comment,
    );

}
$dataProvider=new CArrayDataProvider($colData, array(
    'keyField'=>'name',
    'pagination'=>array(
        'pageSize'=>10000,
    ),
));
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'cssFile'=>'',
    'columns'=>array(
        array(
            'name'=>'name',
            'header'=>Dbe::t("main","field name"),
        ),
        array(
            'name'=>'dbType',
            'header'=>Dbe::t("main","type"),
        ),
        array(
            'name'=>'size',
            'header'=>Dbe::t("main","size"),
        ),
        array(
            'name'=>'autoIncrement',
            'header'=>"AINC",
            'value'=>'(($data["autoIncrement"]) ? Dbe::t("main","yes") : "")',
            'htmlOptions' => array('width'=>30,'title'=>Dbe::t("main","Auto increment"))
        ),
        array(
            'name'=>'isPrimaryKey',
            'header'=>"PK",
            'value'=>'(($data["isPrimaryKey"]) ? Dbe::t("main","yes") : "")',
            'htmlOptions' => array('width'=>30,'title'=>Dbe::t("main","is primary key"))
        ),
        array(
            'name'=>'isForeignKey',
            'header'=>"FK",
            'value'=>'(($data["isForeignKey"]) ? Dbe::t("main","yes") : "")',
            'htmlOptions' => array('width'=>30,'title'=>Dbe::t("main","is foreign key"))
        ),
        array(
            'name'=>'comment',
            'header'=>Dbe::t("main","Comment"),
        ),
    )
));
?>
</div>
<?php endforeach; ?>