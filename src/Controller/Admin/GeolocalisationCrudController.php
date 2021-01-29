<?php

namespace App\Controller\Admin;

use App\Entity\Geolocalisation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class GeolocalisationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Geolocalisation::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            TextField::new('latitude'),
            TextField::new('longitude'),
        ];
    }
   
}
