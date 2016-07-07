<?php

namespace Imartynyuk\ToDoList\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer
            ->getConnection()
            ->newTable(
                $installer->getTable('imartynyuk_todolist_item')
            )
            ->addColumn(
                'id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'nullable' => false,
                    'primary' => true,
                    'unsigned' => true
                ],
                'Entry ID'
            )
            ->addColumn(
                'item_text',
                Table::TYPE_TEXT,
                255,
                [
                    'nullable' => false,
                ],
                'Text of the to do item'
            )
            ->addColumn(
                'date_completed',
                Table::TYPE_DATETIME,
                null,
                array (
                    'nullable' => true,
                )
            )
            ->addColumn(
                'created_at',
                Table::TYPE_TIMESTAMP,
                null,
                [],
                'Creation Time'
            )
            ->addColumn(
                'updated_at',
                Table::TYPE_TIMESTAMP,
                null,
                [],
                'Modification Time'
            )
            ->addColumn(
                'is_active',
                Table::TYPE_SMALLINT,
                null,
                [
                    'nullable' => false,
                    'default' => 1
                ],
                'Is Active'
            )
        ;

        $installer
            ->getConnection()
            ->createTable($table)
        ;

        $installer->endSetup();
    }
}