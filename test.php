<?php
    require 'vendor/autoload.php';   

    use RedBeanPHP\Facade as R;  

    $app = new \Slim\Slim();  

    $app->get('/line/:numLine', function ($numLine) {  

        R::setup('mysql:host=localhost;  
        dbname=db_goBus','root','pwsio');  

        $row = R::findAll('line',' where id='.$numLine);        //display data line entered into id   'name table', 'condition sup'
        $exportRow = R::exportAll($row);        
        
        echo json_encode($exportRow);                                           //js_encode serve to display data all in the inpu line on url
    });  

    $app->run();