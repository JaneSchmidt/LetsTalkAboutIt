<?php

namespace Controllers\RegisterController;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class RegisterController{


    public function register(Request $request, Response $response): Response{

        $data = $request->getParsedBody();
        var_dump($data);
        
        return $response;
    }
}