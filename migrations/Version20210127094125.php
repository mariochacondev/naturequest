<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210127094125 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_plant ADD CONSTRAINT FK_209FB890EAAB3AE1 FOREIGN KEY (final_sheet_id_id) REFERENCES final_sheet (id)');
        $this->addSql('ALTER TABLE final_sheet ADD type VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_plant DROP FOREIGN KEY FK_209FB890EAAB3AE1');
        $this->addSql('ALTER TABLE final_sheet DROP type');
    }
}
