<?php

namespace WBApp\Controllers;

use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;
use Slim\Views\PhpRenderer;
use WBApp\Models\UserModel;

class DisplayUsersController
{
    private $renderer;
    private $userModel;

    /** DisplayUsersController constructor brings in renderer and model instantiated from factory
     *
     * @param PhpRenderer $renderer
     * @param UserModel $userModel
     */
    public function __construct(PhpRenderer $renderer, UserModel $userModel)
    {
        $this->renderer = $renderer;
        $this->userModel = $userModel;
    }

    /** takes data from get all users method and renders users.phtml page
     *
     * @param Request $request
     * @param Response $response
     * @param array $args
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke(Request $request, Response $response, array $args)
    {
        $args['data'] = $this->userModel->getAllUsers();
        return $this->renderer->render($response, 'users.phtml', $args);
    }
}