<?php

namespace App\Controller\Admin;

use App\Entity\ButtonAnimal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ButtonAnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ButtonAnimal::class;
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
