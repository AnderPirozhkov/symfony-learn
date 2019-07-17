<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class BlogPagesController extends Controller
{
    public function common()
    {
        return new Response("Blog common page");
    }

    public function simple()
    {
        return new Response("Blog simple page");
    }
}