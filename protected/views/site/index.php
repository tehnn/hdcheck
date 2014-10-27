<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php
$f43path=Yii::app()->params['f43path'];
$files = CFileHelper::findFiles($f43path);
//$files = CFileHelper::findFiles("images");
foreach ($files as $f){
    echo str_replace($f43path.'/',"",$f); 
    echo "<br>";
}

?>

