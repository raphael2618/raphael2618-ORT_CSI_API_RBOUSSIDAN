<?php
namespace App\Controller;
use Symfony\Component\HttpClient\CurlHttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class viewController extends AbstractController {
    /**
     *  @Route("/view", name="proj_view") 
     * */
     public function view() {
        $clientCurl = new CurlHttpClient();
        
        $var=$clientCurl->request("POST", "http://concoursphoto.ort-france.fr/api/matrice",
        ['headers' => ['Content-Type' => 'application/json'],'body' => '{}']);

        $Content=$var->ToArray();

        dd($Content);
         return new Response('RAPHAEL ORT');

     }


         /**
     *  @Route("/", name="proj_viewHome") 
     * */
     public function viewHOME() {
    
        return new Response('BIENVENUE');
    }
}