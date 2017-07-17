<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Wallpaper;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadWallpaperData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $wallpaper = (new Wallpaper())
            ->setFilename('m3.jpg')
            ->setSlug('m3')
            ->setWidth(2560)
            ->setHeight(1600);

        $manager->persist($wallpaper);
        $manager->flush();
    }

}