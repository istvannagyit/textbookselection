<h3><?php echo Dbe::t("main","The abstract column types of Yii mapped to physical column types");?></h3>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'cssFile'=>'',
    'data'=>Dbe::getDb()->schema->columnTypes,
    'attributes'=>array(
        'pk',
        'string',
        'text',
        'integer',
        'float',
        'decimal',
        'datetime',
        'timestamp',
        'time',
        'date',
        'binary',
        'boolean',
        'money',
    ),
));
?>