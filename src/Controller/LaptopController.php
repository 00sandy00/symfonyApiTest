<?php
// api/src/Controller/LaptopController.php

namespace App\Controller;

use App\Entity\Laptop;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class LaptopController extends AbstractController
{
    

    public function __invoke(Laptop $data): Laptop
    {        
         return $data;
    }
}