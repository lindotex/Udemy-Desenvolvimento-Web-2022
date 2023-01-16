<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require 'vendor/autoload.php';

/**
 * Instantiate App
 *
 * In order for the factory to work you need to ensure you have installed
 * a supported PSR-7 implementation of your choice e.g.: Slim PSR-7 and a supported
 * ServerRequest creator (included with Slim PSR-7)
 */
$app = AppFactory::create();

/**
  * The routing middleware should be added earlier than the ErrorMiddleware
  * Otherwise exceptions thrown from it will not be handled by the middleware
  */
$app->addRoutingMiddleware();

/**
 * Add Error Middleware
 *
 * @param bool                  $displayErrorDetails -> Should be set to false in production
 * @param bool                  $logErrors -> Parameter is passed to the default ErrorHandler
 * @param bool                  $logErrorDetails -> Display error details in error log
 * @param LoggerInterface|null  $logger -> Optional PSR-3 Logger  
 *
 * Note: This middleware should be added last. It will not handle any exceptions/errors
 * for middleware added after it.
 */
$errorMiddleware = $app->addErrorMiddleware(true, true, true);

// Define app routes
$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

// Rota Postagens
$app->get('/postagem', function (Request $request, Response $response) {
    $response->getBody()->write("Lista de Postagens");
    return $response;
}); 

// Rota Usuarios com ids
$app->get('/usuario[/{id}]', function (Request $request, Response $response) {
    $id = $request->getAttribute('id');
    $response->getBody()->write("<strong>Lista de usuarios</strong> <br>". "Id do Usuário: " . $id);
    return $response;
});

// Rota Data das Postagens
$app->get('/postagens[/{mes}[/{ano}]]', function (Request $request, Response $response) {
    $mes = $request->getAttribute('mes');
    $ano = $request->getAttribute('ano');
    $response->getBody()->write("<strong>Data da postagem</strong> <br>". "Data: " . $mes . " / " . $ano) ;
    return $response;
}); 

// Rota Lista
$app->get('/lista[/{itens:.*}]', function (Request $request, Response $response) {
    $itens = $request->getAttribute('itens');    
    $response->getBody()->write("<strong>Lista</strong> <br>");
    echo "<pre>";
    var_dump(explode("/", $itens));
    echo "</pre>";
    return $response;
}); 

// Nomear Rotas
$app->get('/blog/postagens/{id}', function (Request $request, Response $response) {
    $response->getBody()->write("Listar postagem para uma ID.");
    return $response;
})->setName("blog");

$app->get('/meusite', function (Request $request, Response $response) {
    $retorno = $this->get("router")->pathFor("blog", ["id"=>"5"]);
    return $retorno;
});

// Agrupando Rotas
$app->group('/v1', function () use ($app) {

    $app->get('/usuarios', function (Request $request, Response $response) {
        $response->getBody()->write("Lista de Usuarios");
        return $response;
    }); 
    
    $app->get('/postageins', function (Request $request, Response $response) {
        $response->getBody()->write("Lista de Postagens");
        return $response;
    });
}); 

// Run app
$app->run();
?>