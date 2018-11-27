<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 24/11/2018
 * Time: 13:44
 */

namespace theNameSpace;

use Slim\Views\PhpRenderer;
use \Slim\Http\Request as Request;
use \Slim\Http\Response as Response;


class DisplayClassController
{

    protected $newClass;
    protected $renderer;

    public function __construct(PhpRenderer $renderer, ClassModel $classModel)
    {
        $this->renderer = $renderer;
        $this->newClass = $classModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $args['class'] = $this->newClass->getStudents();

        return $this->renderer->render($response,'quotes.phtml',$args);
    }
}