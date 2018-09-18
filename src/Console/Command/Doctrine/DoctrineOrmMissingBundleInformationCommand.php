<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hautelook\AliceBundle\Console\Command\Doctrine;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * @author Dennis Langen <langendennis81@gmail.com>
 */
final class DoctrineOrmMissingBundleInformationCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('hautelook:fixtures:load')
            ->setAliases(['hautelook:fixtures:load'])
            ->setDescription('Load data fixtures to your database.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $io->error(
            "Attention\n".
            "============\n".
            "No ORM bridge has been installed. Please install one to be able to use this command.\n".
            'See https://github.com/hautelook/AliceBundle#installation for more information.'
        );
    }
}
