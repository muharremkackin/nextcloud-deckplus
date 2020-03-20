<?php

namespace OCA\DeckPlus\Migration;

use Closure;
use OCP\DB\ISchemaWrapper;
use OCP\Migration\IOutput;
use OCP\Migration\SimpleMigrationStep;

class Version1000Date20200320142400 extends SimpleMigrationStep
{
    /**
     * @param IOutput $output
     * @param Closure $schemaClosure
     * @param array $options
     * @return ISchemaWrapper|null
     */
    public function changeSchema(IOutput $output, Closure $schemaClosure, array $options)
    {
        /** @var ISchemaWrapper $schema */
        $schema = $schemaClosure();
        if (!$schema->hasTable('deckplus_notes')) {
            $table = $schema->createTable('deckplus_notes');
            $table->addColumn('id', 'integer', [
                'autoincrement' => true,
                'notnull' => true,
            ]);

            $table->addColumn('title', 'string', [
                'notnull' => true,
                'length' => 200,
            ]);

            $table->addColumn('user_id', 'string', [
                'notnull' => true,
                'length' => 200,
            ]);

            $table->addColumn('content', 'text', [
                'notnull' => true,
                'default' => ''
            ]);

            $table->setPrimaryKey(['id']);
            $table->addIndex(['user_id'], 'deckplus_notes_user_id_index');
        }
        return $schema;
    }
}