<?php

namespace App\Controller\Admin;

use App\Entity\Techstack;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TechstackCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Techstack::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('name');
        yield ImageField::new('img_url')
            ->setBasePath('assests/img/techstack')
            ->setUploadDir('/assets/img/projects/');
    }

}
