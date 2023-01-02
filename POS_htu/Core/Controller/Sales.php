<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Base\View;
use Core\Helpers\Helper;
use Core\Helpers\Tests;
use Core\Model\Product;
use Core\Model\Transaction;
use Core\Model\Sale;


class Sales extends Controller

{
    protected $request_body;

    protected $http_code = 200;



    protected $response_schema = array(

        "success" => true,

        "message_code" => "",

        "body" => []


    );



    public function render()

    {



        header("Content-Type: application/json");

        http_response_code($this->http_code);

        echo json_encode($this->response_schema);
    }



    function __construct()

    {

        $this->request_body = json_decode(file_get_contents("php://input", true));
    }
}
