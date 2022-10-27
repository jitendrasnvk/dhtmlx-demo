<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GridController extends Controller
{
    public function data() {                                    
        $connector = new GridConnector(null, "PHPLaravel");    
        $connector->configure(                                  
            new Grid(),                              
            "event_id",                                        
            "start_date, end_date, event_name"                  
        );                                                      
        $connector->render();                                  
    }       
}
