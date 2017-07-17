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

        $wallpaper = (new Wallpaper())
            ->setFilename('m31.jpg')
            ->setSlug('m31')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.bmw')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('m32.jpg')
            ->setSlug('m32')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.bmw')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('m33.jpg')
            ->setSlug('m33')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.bmw')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('m34.jpeg')
            ->setSlug('m34')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.bmw')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('m35.jpg')
            ->setSlug('m35')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.bmw')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('m36.jpg')
            ->setSlug('m36')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.bmw')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('shelby.jpeg')
            ->setSlug('shelby')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.shelby')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('shelby1.jpg')
            ->setSlug('shelby1')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.shelby')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('shelby2.jpg')
            ->setSlug('shelby2')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.shelby')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('shelby3.jpg')
            ->setSlug('shelby3')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.shelby')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('shelby4.jpg')
            ->setSlug('shelby4')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.shelby')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('shelby5.jpg')
            ->setSlug('shelby5')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.shelby')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('skyline.jpg')
            ->setSlug('skyline')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.nissan')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('skyline1.jpg')
            ->setSlug('skyline1')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.nissan')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('skyline2.jpg')
            ->setSlug('skyline2')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.nissan')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('skyline3.jpg')
            ->setSlug('skyline3')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.nissan')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('skyline4.jpg')
            ->setSlug('skyline4')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.nissan')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('skyline5.jpg')
            ->setSlug('skyline5')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.nissan')
            );

        $manager->persist($wallpaper);


        $wallpaper = (new Wallpaper())
            ->setFilename('skyline6.jpg')
            ->setSlug('skyline6')
            ->setWidth(2560)
            ->setHeight(1600)
            ->setCategory(
                $this->getReference('category.nissan')
            );

        $manager->persist($wallpaper);

        $manager->flush();
    }

    public function getOrder()
    {
        return 200;
    }

}