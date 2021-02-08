<?php

namespace App\Controller\Admin;

use App\Entity\CourseAnimal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CourseAnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CourseAnimal::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Etape'),
        ];
    }
}
