<?php

namespace App\Controller\Admin;

use App\Entity\SiteInfos;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SiteInfosCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SiteInfos::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('site_name', 'site name'),
            ImageField::new('logo', 'logo')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
        ];
    }

}
