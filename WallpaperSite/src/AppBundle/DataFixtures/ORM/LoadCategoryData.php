<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category = (new Category())
            ->setName('BMW M3');

        $this->addReference('category.bmw', $category);

        $manager->persist($category);


        $category = (new Category())
            ->setName('Shelby GT 500');

        $this->addReference('category.shelby', $category);

        $manager->persist($category);


        $category = (new Category())
            ->setName('Nissan Skyline R-34');

        $this->addReference('category.nissan', $category);

        $manager->persist($category);


        $manager->flush();
    }

    public function getOrder()
    {
        return 100;
    }


}