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
        yield TextField::new('company_name');
        yield TextField::new('position');
        yield DateField::new('start_date');
        yield DateField::new('end_date');
        yield TextField::new('job_desc_1');
        yield TextField::new('jobs_desc_2');
        yield TextField::new('job_desc_3');
    }

}
