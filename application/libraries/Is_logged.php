<?php

class Is_logged
{

    public function  is_logged_in()
    {
        if(!isset($_SESSION['client'])|| $_SESSION['client']['logged_in']  != true ) {
            return false;
        }
        return true;
    }




}