<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210205165228 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_animal DROP FOREIGN KEY FK_24243CFEEAAB3AE1');
        $this->addSql('DROP INDEX UNIQ_24243CFEEAAB3AE1 ON button_animal');
        $this->addSql('ALTER TABLE button_animal CHANGE final_sheet_id_id final_sheet_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE button_animal ADD CONSTRAINT FK_24243CFEF4FB2895 FOREIGN KEY (final_sheet_id) REFERENCES final_sheet (id)');
        $this->addSql('CREATE INDEX IDX_24243CFEF4FB2895 ON button_animal (final_sheet_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_animal DROP FOREIGN KEY FK_24243CFEF4FB2895');
        $this->addSql('DROP INDEX IDX_24243CFEF4FB2895 ON button_animal');
        $this->addSql('ALTER TABLE button_animal CHANGE final_sheet_id final_sheet_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE button_animal ADD CONSTRAINT FK_24243CFEEAAB3AE1 FOREIGN KEY (final_sheet_id_id) REFERENCES final_sheet (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_24243CFEEAAB3AE1 ON button_animal (final_sheet_id_id)');
    }
}
