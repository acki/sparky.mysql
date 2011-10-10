<?php

   /**
    * Class for creating MySQL connections and queries
    */

    class mysql {
    
        // variables
        public     $mysqli;
    
        // construct function, called when creating a new object
        function __construct() {
        
            // globalize some data
            global $cfg;
            
            // create a connection. @ means suppressing errors (we handle it self)
            $this->mysqli = @new mysqli($cfg['mysql']['host'], $cfg['mysql']['user'], $cfg['mysql']['password'], $cfg['mysql']['database']);
            
            // if connection is good
            if(!mysqli_connect_error() && is_object($this->mysqli)) {
                
                // return mysqli object
                return $this->mysqli;
                
            // else error handling
            } else {
            
                // check if mysql error
                $error = mysqli_connect_error();
                if(!mysqli_connect_error()) {
                    $error = 'We got no database object! Don\'t know why...';
                }
                
                // throw error
                panic($error);
                
            }
            
        }
        
    }

?>