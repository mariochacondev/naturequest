<?php

namespace App\Controller\Admin;

use App\Entity\ButtonPlant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class ButtonPlantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ButtonPlant::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('content'),
            UrlField::new('img'),
            AssociationField::new('stepId'),
            AssociationField::new('nextStepId'),
            AssociationField::new('finalSheetId'),
        ];
    }
   
}
