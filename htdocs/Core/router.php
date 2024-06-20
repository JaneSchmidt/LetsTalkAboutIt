<?php

class Router {

    public static function route($request){
        switch($request["path"]){
            case "/":
              view("homeView.php");
              break; 
            case "/login":
              view("loginView.php");
              break; 
            case "/register":
              view("registerView.php");
              break;
            case "/resetPassword":
              view("resetPassword.php");
              break;
            case "/addArticle":
              view("addArticleView.php");
              break;
            case "/fullArticle":
              view("fullArticleView.php");
              break;
            case "/logout":
              include base_path("Controllers/logoutController.php");
              LogoutController::logoutRequest();
              break;
            case "/getLoggedIn":
              include base_path("Controllers/loginController.php");
              LoginController::loginRequest();
              break;
            case "/getRegistered":
              include base_path("Controllers/registerController.php");
              $register = new RegisterController();
              $register->validations();
              break;
            case "/newArticle":
              include base_path("Controllers/addArticleController.php");
              $addArticle = new AddArticleController();
              $addArticle->validations();
              break;
            case "/addComment":
              include base_path("Controllers/addCommentController.php");
              $addComment = new AddCommentController();
              $addComment->validations();
              break;
            default:
              view("homeView.php");
              break; 
          
          }
    }
}

/*
    protected $routes = [];

    public function add($method, $uri, $controller){
      $this->routes[] = compact('method', 'uri', 'controller');
    }

    public function get($uri, $controller){

      $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller){

      $this->add('POST', $uri, $controller);

    }

    public function delete($uri, $controller){

      $this->add('DELETE', $uri, $controller);
    }

    public function put($uri, $controller){

      $this->add('PUT', $uri, $controller);

    }

    public function patch($uri, $controller){

      $this->add('PATCH', $uri, $controller);
  
    }

    public function newRoute($uri, $method){
      foreach($this->routes as $route){
        if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
          return require base_path($route['controller']);
        }
      }
    } 
*/