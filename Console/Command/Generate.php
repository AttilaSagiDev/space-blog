<?php
/**
 * Copyright © 2023, Open Software License ("OSL") v. 3.0
 */

declare(strict_types=1);

namespace Space\Blog\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\Exception\LocalizedException;

class Generate extends Command
{
    /**
     * Count constant
     */
    private const COUNT = 'count';

    public function __construct(
        string $name = null
    ) {
        parent::__construct('space:blog:generate');
    }

    /**
     * Configure
     *
     * @return void
     */
    protected function configure(): void
    {
        $this->setName('space:blog:generate');
        $this->setDescription('Generate custom posts for blog module');
        $this->addOption(
            self::COUNT,
            null,
            InputOption::VALUE_REQUIRED,
            'Required parameter for posts count to generate from 5 to 20'
        );

        parent::configure();
    }

    /**
     * Execute
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $exitCode = self::SUCCESS;

        try {
            if ($count = $input->getOption(self::COUNT)) {
                if (empty($count) || !is_numeric($count)) {
                    throw new LocalizedException(__('Parameter count has to be a number'));
                }
            } else {
                throw new LocalizedException(__('Please provide count parameter. See space:blog:generate -h'));
            }
        } catch (LocalizedException $e) {
            $output->writeln(sprintf('<error>%s</error>', $e->getMessage()));
            $exitCode = self::FAILURE;
        }

        /*$output->writeln('<info>Success message.</info>');
        $output->writeln('<comment>Some comment.</comment>');*/

        return $exitCode;
    }
}
