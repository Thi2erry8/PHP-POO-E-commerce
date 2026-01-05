<?php
    
    namespace GamerHouse;

    use GamerHouse\config\Databases;

    class App
    {
        private array $routes;
        
        

        public function __construct(string $root)
        {
            
            $this->initDatabases();
            
            $this->routes = require $root . '/src/config/routes.php';
        }

        private function initDatabases(): void
        {
            try {
               // Initialiser la connexion (pas besoin de la stocker)
               $db = new \GamerHouse\config\Databases();
               $db->getConnection();  // Juste pour tester la connexion
            } catch (\Exception $e) {
               // Optionnel: logger l'erreur
               error_log("Erreur BD: " . $e->getMessage());
            }
        }

        public function run(): void
        {
            $method = $_SERVER['REQUEST_METHOD'];
            $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

            foreach ($this->routes as $route) {
                if(
                    $route['method'] === $method && 
                    $route['path'] === $uri
                ){
                    [$controller, $action] = $route['handler'];

                    $controllerInstance = new $controller();
                    $controllerInstance->$action();

                    return;
                }

               
            }
            
            http_response_code(404);
             echo 'page non trouvee';
        }      
    }