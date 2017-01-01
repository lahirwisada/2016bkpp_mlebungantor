<?php

/*
 * JAKARTA INTERNATIONAL CONTAINER TERMINAL
 * ICT DEVELOPER
 * @autor Satria Persada <satria.persada@jict.co.id>
 * 2016bkpp_mlebungantor 
 * client.php
 * Nov 30, 2016 
 */
//require APPPATH.'/libraries/rest.php';

class Client extends CI_Controller {

        public function index()
        {
            $id=1;
//            $this->load->spark('restclient/2.2.1');
                $this->load->library('rest_client');
//                , array(
//        'server' => 'http://localhost/restserver/index.php/example_api/',
//        'http_user' => 'admin',
//        'http_pass' => '1234',
//        'http_auth' => 'basic' // or 'digest'
//    ));
//     
//    $user = $this->rest->get('user', array('id' => $id), 'json');
//     
//    echo $user->name;
        }
}
