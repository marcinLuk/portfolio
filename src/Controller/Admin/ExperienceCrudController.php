<?php

namespace App\Controller\Admin;

use App\Entity\Experience;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ExperienceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Experience::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('company_name'),
            TextField::new('position'),
            DateField::new('start_date'),
            DateField::new('end_date'),
            TextField::new('job_desc_1'),
            TextField::new('jobs_desc_2'),
            TextField::new('job_desc_3')
        ];
    }

}
