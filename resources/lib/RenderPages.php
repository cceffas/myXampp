<?php




namespace MyXampp\lib;



final class RenderPages
{
    private string $path = __DIR__ . "/../pages";
    private array $routes = [];



    public function __construct()
    {
        $this->routes = require_once __DIR__ . "/../routes/routes.php";
    }

    public function routeSystem()
    {

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        $fileName = "test";

        if (key_exists($uri, $this->routes[$method])) {



            try {

                $fileName = $this->routes[$method][$uri];

            } catch (\Exception $th) {

                echo $th;

            }

        }

        return (string) $fileName;

    }
    public function render(string $fileName)
    {

        $absolutePath = str_replace("//", "/", $this->path . DIRECTORY_SEPARATOR . $fileName);


        if (file_exists($absolutePath)) {
            require_once $absolutePath;
        } else {

            require_once $this->path . DIRECTORY_SEPARATOR . "support/index.php";
        }

    }




}
