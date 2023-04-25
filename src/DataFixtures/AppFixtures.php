<?php

namespace App\DataFixtures;

use App\Entity\Experience;
use App\Entity\Project;
use App\Entity\Skills;
use App\Entity\Techstack;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $techstack1 = new Techstack();
        $techstack1->setName('Vue');
        $techstack1->setImgUrl('https://picsum.photos/200/300');
        $manager->persist($techstack1);

        $techstack2 = new Techstack();
        $techstack2->setName('WP');
        $techstack2->setImgUrl('https://picsum.photos/200/300');
        $manager->persist($techstack2);

        $project1 = new Project();
        $project1->setName('Lorem ipsum');
        $project1->setLink('http://test.com');
        $project1->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscinit anim id est laborum');
        $project1->setGithub('www.test.pl');
        $project1->setThumbnailUrl('https://picsum.photos/200/300');
        $project1->setImgUrl('https://picsum.photos/200/300');
        $project1->addStack( $techstack1 );
        $manager->persist( $project1 );

        $project2 = new Project();
        $project2->setName('Lorem ipsum 2');
        $project2->setLink('http://test.com');
        $project2->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscinit anim id est laborum');
        $project2->setThumbnailUrl('https://picsum.photos/200/300');
        $project2->setImgUrl('https://picsum.photos/200/300');
        $manager->persist( $project2 );

        $project3 = new Project();
        $project3->setName('Lorem ipsum 3');
        $project3->setLink('http://test.com');
        $project3->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscinit anim id est laborum');
        $project3->setThumbnailUrl('https://picsum.photos/200/300');
        $project3->setImgUrl('https://picsum.photos/200/300');
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
        $expierence->setJobDesc1('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi');
        $expierence->setJobsDesc2('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi');
        $expierence->setJobDesc3('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi');
        $manager->persist( $expierence );

        $expierence2 = new Experience();
        $expierence2->setCompanyName('company name');
        $expierence2->setPosition('position');
        $expierence2->setStartDate( new \DateTime('2021/12/02'));
        $expierence2->setEndDate(new \DateTime('2022/12/02'));
        $expierence2->setJobDesc1('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi');
        $expierence2->setJobsDesc2('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi');
        $manager->persist( $expierence2 );

        $expierence3 = new Experience();
        $expierence3->setCompanyName('company name');
        $expierence3->setPosition('position');
        $expierence3->setStartDate( new \DateTime('2021/12/02'));
        $expierence3->setEndDate(new \DateTime('2022/12/02'));
        $expierence3->setJobDesc1('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi');
        $expierence3->setJobsDesc2('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi');
        $manager->persist( $expierence3 );

        $expierence4 = new Experience();
        $expierence4->setCompanyName('company name');
        $expierence4->setPosition('position');
        $expierence4->setStartDate( new \DateTime('2021/12/02'));
        $expierence4->setEndDate(new \DateTime('2022/12/02'));
        $expierence4->setJobDesc1('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi');
        $expierence4->setJobsDesc2('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi');
        $manager->persist( $expierence4 );

        $expierence5 = new Experience();
        $expierence5->setCompanyName('company name');
        $expierence5->setPosition('position');
        $expierence5->setStartDate( new \DateTime('2021/12/02'));
        $expierence5->setEndDate(new \DateTime('2022/12/02'));
        $expierence5->setJobDesc1('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi');
        $expierence5->setJobsDesc2('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi');
        $manager->persist( $expierence5 );

        $manager->flush();
    }
}
