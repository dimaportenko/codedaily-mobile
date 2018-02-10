<?php

namespace CodeDaily\Mobile\Console\Command;

use Magento\Framework\Console\Cli;
use Magento\Framework\Event\ManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Test extends Command {

    const INPUT_KEY_NAME = 'name';
    const INPUT_KEY_DESCRIPTION = 'description';

    private $eavSetupFactory;
    private $setup;

    public function __construct(
        \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory,
        \Magento\Framework\Setup\ModuleDataSetupInterface $setup
    ) {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->setup = $setup;
        parent::__construct();
    }

    protected function configure() {
        $this->setName('codedaily:mobile:test');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

        $eavSetup = $this->eavSetupFactory->create(['setup' => $this->setup]);
//        $eavSetup->removeAttribute(
//            \Magento\Catalog\Model\Product::ENTITY,
//            'mobile_home_banner');

        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'mobile_home_banner',
            [
                'group' => 'General',
                'type' => 'int',
                'backend' => '',
                'frontend' => '',
                'label' => 'Mobile Home Banner',
                'input' => 'boolean',
                'class' => '',
                'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => '0',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => false,
                'used_in_product_listing' => false,
                'unique' => false,
                'apply_to' => ''
            ]
        );

        return Cli::RETURN_SUCCESS;
    }
}