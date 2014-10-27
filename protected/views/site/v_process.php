<style>
    table{
       
        width: 100%;
    }
</style>


<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'columns' => array(
        //'Host', 'db', 'State', 'Command', 'Info',
        array(
            'name' => 'Id',
            //'htmlOptions' => array('width' => '5'),
            'headerHtmlOptions' => array('style' => 'background:#839A8F')
        ),
        array(
            'name' => 'Host',
            //'htmlOptions' => array('width' => '5'),
            'headerHtmlOptions' => array('style' => 'background:#839A8F')
        ),
        array(
            'name' => 'db',
            //'htmlOptions' => array('width' => '5'),
            'headerHtmlOptions' => array('style' => 'background:#839A8F')
        ),
        array(
            'name' => 'State',
            'htmlOptions' => array('style'=>"max-width:150px;word-wrap: break-word;"),
            'headerHtmlOptions' => array('style' => 'background:#839A8F')
        ),
        array(
            'name' => 'Command',
            //'htmlOptions' => array('width' => '5'),
            'headerHtmlOptions' => array('style' => 'background:#839A8F')
        ),
        array(
            'name' => 'Info',
            'htmlOptions' => array('style'=>"max-width:450px;word-wrap: break-word;"),
            'headerHtmlOptions' => array('style' => 'background:#839A8F')
        ),
    )
));
?>

<?php
/*
  $this->widget('zii.widgets.grid.CGridView', array(
  'dataProvider' => $dataProvider
  )); 
?>
