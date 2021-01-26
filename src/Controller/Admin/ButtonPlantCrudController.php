<?php

namespace App\Controller\Admin;

use App\Entity\ButtonPlant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ButtonPlantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ButtonPlant::class;
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
