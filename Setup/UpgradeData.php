<?php
/**
 * Created by PhpStorm.
 * User: Dmytro Portenko
 * Date: 2/12/18
 * Time: 10:39 PM
 */

namespace CodeDaily\Mobile\Setup;

class UpgradeData implements \Magento\Framework\Setup\UpgradeDataInterface
{

    /**
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function upgrade(\Magento\Framework\Setup\ModuleDataSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $setup->startSetup();

         if (version_compare($context->getVersion(), '0.0.2', '<=')) {
             $setup->getConnection()->insert(
                 $setup->getTable('codedaily_home_widget_type'),
                 [
                     'label' => 'Card'
                 ]
             );
             $setup->getConnection()->insert(
                 $setup->getTable('codedaily_home_widget_type'),
                 [
                     'label' => 'Two Column'
                 ]
             );
             $setup->getConnection()->insert(
                 $setup->getTable('codedaily_home_widget_type'),
                 [
                     'label' => 'Simple'
                 ]
             );
             $setup->getConnection()->insert(
                 $setup->getTable('codedaily_home_widget_type'),
                 [
                     'label' => 'List'
                 ]
             );
             $setup->getConnection()->insert(
                 $setup->getTable('codedaily_home_widget_type'),
                 [
                     'label' => 'Advance'
                 ]
             );
             $setup->getConnection()->insert(
                 $setup->getTable('codedaily_home_widget_type'),
                 [
                     'label' => 'Three Column'
                 ]
             );
             $setup->getConnection()->insert(
                 $setup->getTable('codedaily_home_widget_type'),
                 [
                     'label' => 'Horizon'
                 ]
             );
             $setup->getConnection()->insert(
                 $setup->getTable('codedaily_home_widget_type'),
                 [
                     'label' => 'Two Column High'
                 ]
             );
             $setup->getConnection()->insert(
                 $setup->getTable('codedaily_home_widget_type'),
                 [
                     'label' => 'Mini Banner'
                 ]
             );
         }

        $setup->endSetup();
    }
}