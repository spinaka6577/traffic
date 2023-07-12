<?php

namespace App\Command;

use App\Service\HeroService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class GetHeroCommand extends Command
{
    protected static $defaultName = 'app:get-hero';
    protected static $defaultDescription = 'Get hero from API';
    private HeroService $heroService;

    /**
     * GetHeroCommand constructor.
     */
    public function __construct(HeroService $heroService)
    {
        $this->heroService = $heroService;
        parent::__construct();

    }


    protected function configure(): void
    {
        $this
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $heroServiceCount = $this->heroService->get();

        $io->success('Pobrano wszystkich ' . $heroServiceCount . 'bohaterów.');

        return Command::SUCCESS;
    }
}
