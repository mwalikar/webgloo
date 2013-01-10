<?php

namespace com\indigloo\exception {

    class UIException extends \Exception  {

        private $messages ;

        public function __construct($messages) {

            if(!is_array($messages) || (sizeof($messages) == 0)) {
                trigger_error("first argument to UIException is not an array",E_USER_ERROR);
            }
            
            $message = $messages[0];
            parent::__construct($message);
            $this->messages = $messages;
        }

        public function getMessages() {
            return $this->messages ;
        }

    }
}

?>
