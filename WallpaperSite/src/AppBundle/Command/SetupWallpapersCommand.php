<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SetupWallpapersCommand extends Command
{
    /**
     * @var string
     */
    private $rootDir;

    public function __construct(string $rootDir)
    {
        parent::__construct();

        $this->rootDir = $rootDir;
    }

    protected function configure()
    {
        $this
            ->setName('app:setup-wallpapers')
            ->setDescription('Grabs all the local wallpapers and creates a Wallpaper entity for each one.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $wallpapers = glob($this->rootDir . '/../web/images/*.*');

        exit(\Doctrine\Common\Util\Debug::dump($wallpapers));

        $output->writeln('Command result.');
    }

}
