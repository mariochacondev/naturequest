<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210205170932 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_plant DROP INDEX UNIQ_209FB890DCF1826B, ADD INDEX IDX_209FB890DCF1826B (next_step_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_plant DROP INDEX IDX_209FB890DCF1826B, ADD UNIQUE INDEX UNIQ_209FB890DCF1826B (next_step_id_id)');
    }
}
