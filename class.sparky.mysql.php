<?php

    class mysql {
    
        public     $mysqli;
    
        function __construct() {
        
            global $cfg;
        
            if($this->mysqli = new mysqli($cfg['mysql']['host'], $cfg['mysql']['user'], $cfg['mysql']['password'], $cfg['mysql']['database']) && isset($this->mysqli)) {
                return $this->mysqli;
            } else {
                print mysqli_connect_error();
                print "doof";
                //panic('No MySQL connection!');
            }
            
        }
        
    }

?>