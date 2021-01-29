<?php

namespace App\Controller\Admin;

use App\Entity\ButtonAnimal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class ButtonAnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ButtonAnimal::class;
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
