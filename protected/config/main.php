<?php

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'HDCheck - ระบบช่วยตรวจสอบ HDC',
    'timeZone' => 'Asia/Bangkok',
    'preload' => array('log'),
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
    ),
    'components' => array(
        'user' => array(            
            'allowAutoLogin' => true,
        ),
        
        // กำหนด การเชื่อมต่อ MySQl (hdc databases)
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=hdc',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '123',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
    ),
    'params' => array(
        // กำหนดไดเรคทอรีที่เก็บ ZIP  ไฟล์ 43 แฟ้ม
        'f43path' => "/opt/tomcat/webapps/hdc/WEB-INF/fortythree/",
    ),
);