<?php

namespace Imartynyuk\ObjectRepos\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\App\State;

class TestCommand extends Command
{
    protected $objectManager;

    protected function configure()
    {
        $this->setName('object-repos:test');
        $this->setDescription('This command was created for education goals');

        parent::configure();
    }

    public function __construct(ObjectManagerInterface $objectManager, State $appState, $name = null)
    {
        $this->objectManager = $objectManager;
        $appState->setAreaCode('frontend');

        parent::__construct($name);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $repo = $this
            ->objectManager
            ->get('Magento\Cms\Model\PageRepository')
        ;

        $page = $repo->getById(2);

        echo get_class($page) . "\n";
        echo $page->getTitle() . "\n";
    }
}