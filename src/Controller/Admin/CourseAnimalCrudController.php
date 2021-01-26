<?php

namespace App\Controller\Admin;

use App\Entity\CourseAnimal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CourseAnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CourseAnimal::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
