<?php

namespace App\Controller\Admin;

use App\Entity\FinalSheetPlant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FinalSheetPlantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FinalSheetPlant::class;
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
