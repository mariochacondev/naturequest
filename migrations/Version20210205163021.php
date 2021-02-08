<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210205163021 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_plant ADD final_sheet_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE button_plant ADD CONSTRAINT FK_209FB890F4FB2895 FOREIGN KEY (final_sheet_id) REFERENCES final_sheet (id)');
        $this->addSql('CREATE INDEX IDX_209FB890F4FB2895 ON button_plant (final_sheet_id)');
        $this->addSql('ALTER TABLE final_sheet DROP FOREIGN KEY FK_8624C272D7FED785');
        $this->addSql('DROP INDEX IDX_8624C272D7FED785 ON final_sheet');
        $this->addSql('ALTER TABLE final_sheet DROP button_plant_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_plant DROP FOREIGN KEY FK_209FB890F4FB2895');
        $this->addSql('DROP INDEX IDX_209FB890F4FB2895 ON button_plant');
        $this->addSql('ALTER TABLE button_plant DROP final_sheet_id');
        $this->addSql('ALTER TABLE final_sheet ADD button_plant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE final_sheet ADD CONSTRAINT FK_8624C272D7FED785 FOREIGN KEY (button_plant_id) REFERENCES button_plant (id)');
        $this->addSql('CREATE INDEX IDX_8624C272D7FED785 ON final_sheet (button_plant_id)');
    }
}
