<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;



class MainPageController extends Controller
{

    public function index()
    {
        return new Response(
            "<h1>First main page</h1>"
        );
    }

}