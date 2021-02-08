<?php

namespace App\Controller\Admin;

use App\Entity\ButtonPlant;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\VichImageField;

class ButtonPlantCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ButtonPlant::class;
    }

    
    public function configureFields(string $pageName): iterable
    {

        $imageFile = VichImageField::new('imageFile')->setFormType(VichImageType::class);
        $image = ImageField::new('image')->setBasePath('uploads/images/buttonplants');

        $fields = [
            TextField::new('content', 'Contenu'),
            AssociationField::new('stepId', 'Etape'),
            AssociationField::new('nextStepId', 'Prochaine Etape' ),
            AssociationField::new('finalSheet', 'Fiche Final'),
        ];

        if ($pageName == Crud::PAGE_INDEX || $pageName == Crud::PAGE_DETAIL) {
            $fields[] = $image;
        } else {
            $fields[] = $imageFile;
        }
        return $fields;


    }
   
}
