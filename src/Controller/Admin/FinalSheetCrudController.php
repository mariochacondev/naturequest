<?php

namespace App\Controller\Admin;

use App\Entity\FinalSheet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FinalSheetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FinalSheet::class;
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
