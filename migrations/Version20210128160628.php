<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210128160628 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_plant ADD next_step_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE button_plant ADD CONSTRAINT FK_209FB890DCF1826B FOREIGN KEY (next_step_id_id) REFERENCES course_plant (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_209FB890DCF1826B ON button_plant (next_step_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_plant DROP FOREIGN KEY FK_209FB890DCF1826B');
        $this->addSql('DROP INDEX UNIQ_209FB890DCF1826B ON button_plant');
        $this->addSql('ALTER TABLE button_plant DROP next_step_id_id');
    }
}
