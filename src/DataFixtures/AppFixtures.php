<?php

namespace App\DataFixtures;

use App\Entity\Experience;
use App\Entity\Project;
use App\Entity\Skills;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $project1 = new Project();
        $project1->setName('Lorem ipsum');
        $project1->setLink('http://test.com');
        $project1->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscinit anim id est laborum');
        $project1->setThumbnailUrl('https://picsum.photos/200/300');
        $manager->persist( $project1 );

        $project2 = new Project();
        $project2->setName('Lorem ipsum 2');
        $project2->setLink('http://test.com');
        $project2->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscinit anim id est laborum');
        $project2->setThumbnailUrl('https://picsum.photos/200/300');
        $manager->persist( $project2 );

        $project3 = new Project();
        $project3->setName('Lorem ipsum 3');
        $project3->setLink('http://test.com');
        $project3->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscinit anim id est laborum');
        $project3->setThumbnailUrl('https://picsum.photos/200/300');
        $manager->persist( $project3 );

        $skill1 = new Skills();
        $skill1->setName('Skill 1');
        $skill1->setPrecent(50);
        $manager->persist( $skill1 );

        $skill2 = new Skills();
        $skill2->setName('Skill 2');
        $skill2->setPrecent(50);
        $manager->persist( $skill2 );

        $expierence = new Experience();
        $expierence->setCompanyName('company name');
        $expierence->setPosition('position');
        $expierence->setStartDate( new \DateTime('2022/12/02'));
        $expierence->setEndDate(null);
        $expierence->setJobDesc1('Lorem ipsum');
        $expierence->setJobsDesc2('Lorem ipsum');
        $expierence->setJobDesc3('Lorem ipsum');
        $manager->persist( $expierence );

        $expierence2 = new Experience();
        $expierence2->setCompanyName('company name');
        $expierence2->setPosition('position');
        $expierence2->setStartDate( new \DateTime('2021/12/02'));
        $expierence2->setEndDate(new \DateTime('2022/12/02'));
        $expierence2->setJobDesc1('Lorem ipsum');
        $expierence2->setJobsDesc2('Lorem ipsum');
        $manager->persist( $expierence2 );

        $manager->flush();
    }
}
