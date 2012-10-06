<?php

/*
    Class Controller_Home
*/

class Controller_Home extends Controller{
    
    /*
        Default route function
    */
    function action_index(){
        // rerouting to view MVVC
        return Response::forge(View::forge('home/page'));
    }
    
}

?>