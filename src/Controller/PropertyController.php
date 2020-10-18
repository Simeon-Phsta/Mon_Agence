<?php 
namespace App\Controller;

use App\Entity\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class PropertyController extends AbstractController
{
    /**
    * @Route("/biens", name="property.index")
    * @return Response
    **/
    public function index(): Response
    {
        $property = new Property();
        $property -> setTitle("Mon premier bien");
        
        return $this->render('property/index.html.twig');
    }
}