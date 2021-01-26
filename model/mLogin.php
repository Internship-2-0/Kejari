<?php
    class mLogin {
        public function getLogin() {
            if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
                if ($_REQUEST['username']=='admin' && $_REQUEST['password']=='admin'){
                    return 'login';
                }else{
                    return '>>> invalid user';
                }
            }
        }
    }