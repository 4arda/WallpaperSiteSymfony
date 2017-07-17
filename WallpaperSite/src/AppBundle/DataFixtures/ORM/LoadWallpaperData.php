<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Wallpaper;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadWallpaperData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $wallpaper = (new Wallpaper())
            ->setFilename('m3.jpg')
            ->setSlug('m3')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.bmw')
            );

        $manager->persist($wallpaper);
        $manager->flush();
    }

    public function getOrder()
    {
        return 200;
    }

}