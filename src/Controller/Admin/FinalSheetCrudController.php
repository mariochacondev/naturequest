<?php

namespace App\Controller\Admin;

use App\Entity\FinalSheet;
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

class FinalSheetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FinalSheet::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $imageFile1 = VichImageField::new('imageFile1')->setFormType(VichImageType::class);
        $image1 = ImageField::new('image1')->setBasePath('uploads/images/finalsheets');
        $imageFile2 = VichImageField::new('imageFile2')->setFormType(VichImageType::class);
        $image2 = ImageField::new('image2')->setBasePath('uploads/images/finalsheets');
        $imageFile3 = VichImageField::new('imageFile3')->setFormType(VichImageType::class);
        $image3 = ImageField::new('image3')->setBasePath('uploads/images/finalsheets');
        $imageFile4 = VichImageField::new('imageFile4')->setFormType(VichImageType::class);
        $image4 = ImageField::new('image4')->setBasePath('uploads/images/finalsheets');

        $fields = [
            TextField::new('title', 'Titre'),
            TextField::new('subtitle', 'Soustitre'),
            TextField::new('type', 'Type (Animal/Plant)' ),
        ];

        if ($pageName == Crud::PAGE_INDEX || $pageName == Crud::PAGE_DETAIL) {
            $fields[] = $image1;
            $fields[] = $image2;
            $fields[] = $image3;
            $fields[] = $image4;
        } else {
            $fields[] = $imageFile1;
            $fields[] = $imageFile2;
            $fields[] = $imageFile3;
            $fields[] = $imageFile4;
        }
        return $fields;
    }
}
