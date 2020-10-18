<?php 
namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\ORM\Repository\RepositoryFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class PropertyController extends AbstractController
{
    /**
     * @var PropertyRepository
     */

    public function __construct(PropertyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
    * @Route("/biens", name="property.index")
    * @return Response
    **/
    public function index(): Response
    {
        $property = $this->repository->find(1);
        dump($property);
       
        return $this->render('property/index.html.twig');
    }
}