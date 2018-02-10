<?php
/**
 * Created by PhpStorm.
 * User: Dmytro Portenko
 * Date: 2/10/18
 * Time: 7:22 PM
 */

namespace CodeDaily\Mobile\Setup;

use Magento\Eav\Setup\EavSetupFactory;

class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{
    private $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(\Magento\Framework\Setup\ModuleDataSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
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
    }
}