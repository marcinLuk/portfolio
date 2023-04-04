<?php

namespace App\DataFixtures;

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

        $manager->flush();
    }
}
