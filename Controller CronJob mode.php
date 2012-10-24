<?php

//in controller files
public function beforeFilter() {
    parent::beforeFilter();

    //Cronjob mode, no views needed
    $this->render(false);

    //$this->autoRender = false;
    //$this->layout = null;
}