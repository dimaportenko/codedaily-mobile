<?php
/**
 * Created by PhpStorm.
 * User: Dmytro Portenko
 * Date: 2/12/18
 * Time: 10:17 PM
 */

namespace CodeDaily\Mobile\Setup;

class UpgradeSchema implements \Magento\Framework\Setup\UpgradeSchemaInterface
{
    /**
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function upgrade(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $setup->startSetup();


        if (version_compare($context->getVersion(), '0.0.2', '<=')) {
            $table = $setup->getConnection()->newTable(
                $setup->getTable('codedaily_home_widget')
            )->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'Widget ID'
            )->addColumn(
                'title',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Widget title'
            )->addColumn(
                'sort_order',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true],
                'Sort Order'
            )->addColumn(
                'type',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true],
                'Widget Type'
            )->setComment(
                'Home Screen Widget'
            );

            $setup->getConnection()->createTable($table);

            $table = $setup->getConnection()->newTable(
                $setup->getTable('codedaily_home_widget_type')
            )->addColumn(
                'type_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Type Id'
            )->addColumn(
                'label',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                32,
                ['nullable' => false],
                'Type Label'
            )->setComment(
                'Home Screen Widget Types'
            );
            $setup->getConnection()->createTable($table);
        }


        $setup->endSetup();
    }
}