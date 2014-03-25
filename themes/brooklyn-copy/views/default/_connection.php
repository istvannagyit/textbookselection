<h2><?php echo Dbe::t("main","Informations about the database connection");?></h2>
<?php
$cData=Dbe::getConnectionData();
switch ($cData['columnCase']) {
    case PDO::CASE_NATURAL:
        $strColumnCase=Dbe::t("main","Leave column names as returned by the database driver.");
        break;
    case PDO::CASE_UPPER:
        $strColumnCase=Dbe::t("main","Force column names to upper case.");
        break;
    case PDO::CASE_LOWER:
        $strColumnCase=Dbe::t("main","Force column names to lower case.");
        break;    
    default:
        $strColumnCase='';
        break;
}

switch ($cData['nullConversion']) {
    case PDO::NULL_NATURAL:
        $strNullConversion=Dbe::t("main","No conversion.");
        break;
    case PDO::NULL_EMPTY_STRING:
        $strNullConversion=Dbe::t("main"," Empty string is converted to NULL.");
        break;
    case PDO::NULL_TO_STRING:
        $strNullConversion=Dbe::t("main","NULL is converted to an empty string.");
        break;    
    default:
        $strNullConversion='';
        break;
}

$this->widget('zii.widgets.CDetailView', array(
    'cssFile'=>'',
    'itemTemplate'=>"<tr class=\"{class}\"><th style=\"width:61.8%;\">{label}</th><td>{value}</td></tr>\n",
    'data'=>$cData,    
    'attributes'=>array(
        array(
            'name'=>'connectionString',
            'label'=>Dbe::t("main","the Data Source Name (DSN)")
        ),
        array(
            'name'=>'username',
            'label'=>Dbe::t("main","the username for establishing DB connection")
        ),
        array(
            'name'=>'charset',
            'label'=>Dbe::t("main","the charset used for connection")
        ),
        array(
            'name'=>'clientVersion',
            'label'=>Dbe::t("main","the version information of the DB driver")
        ),
        array(
            'name'=>'driverName',
            'label'=>Dbe::t("main","name of the DB driver")
        ),
        array(
            'name'=>'columnCase',
            'label'=>Dbe::t("main","the case of the column names"),
            'value'=>$strColumnCase
        ),
        array(
            'name'=>'nullConversion',
            'label'=>Dbe::t("main","how the null and empty strings are converted"),
            'value'=>$strNullConversion
        ),
        
        array(
            'name'=>'schemaCachingDuration',
            'label'=>Dbe::t("main","the number of seconds that table metadata can remain valid in cache")
        ),
        array(
            'name'=>'schemaCacheID',
            'label'=>Dbe::t("main","the ID of the cache application component that is used to cache the table metadata")
        ),
        array(
            'name'=>'emulatePrepare',
            'label'=>Dbe::t("main","whether to turn on prepare emulation"),
            'value'=>($cData['emulatePrepare']==true) ? Dbe::t("main","yes") : Dbe::t("main","no"),
        ),
        array(
            'name'=>'enableParamLogging',
            'label'=>Dbe::t("main","whether to log the values that are bound to a prepare SQL statement"),
            'value'=>($cData['enableParamLogging']==true) ? Dbe::t("main","yes") : Dbe::t("main","no"),
        ),
        array(
            'name'=>'enableProfiling',
            'label'=>Dbe::t("main","whether to enable profiling the SQL statements being executed"),
            'value'=>($cData['enableProfiling']==true) ? Dbe::t("main","yes") : Dbe::t("main","no"),
        ),
        array(
            'name'=>'tablePrefix',
            'label'=>Dbe::t("main","the default prefix for table names")
        ),
    ),

));
?>