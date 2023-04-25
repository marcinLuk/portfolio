<?php

namespace App\Controller\Admin;

use App\Entity\Techstack;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TechstackCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Techstack::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('img_url')
        ];
    }

}
