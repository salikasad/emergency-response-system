<?php

class HeaderWidget extends CWidget
{
    public function init()
    {
        // this method is called by CController::beginWidget()
    }
 
    public function run()
    {
        $this->render('header'); 
    }
}


