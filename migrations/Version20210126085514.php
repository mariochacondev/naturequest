<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210126085514 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_plant ADD course_plant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE button_plant ADD CONSTRAINT FK_209FB890B4273B04 FOREIGN KEY (course_plant_id) REFERENCES course_plant (id)');
        $this->addSql('CREATE INDEX IDX_209FB890B4273B04 ON button_plant (course_plant_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_plant DROP FOREIGN KEY FK_209FB890B4273B04');
        $this->addSql('DROP INDEX IDX_209FB890B4273B04 ON button_plant');
        $this->addSql('ALTER TABLE button_plant DROP course_plant_id');
    }
}
