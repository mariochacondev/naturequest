<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210120143113 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plant_course ADD plant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE plant_course ADD CONSTRAINT FK_F50EBE321D935652 FOREIGN KEY (plant_id) REFERENCES plant (id)');
        $this->addSql('CREATE INDEX IDX_F50EBE321D935652 ON plant_course (plant_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plant_course DROP FOREIGN KEY FK_F50EBE321D935652');
        $this->addSql('DROP INDEX IDX_F50EBE321D935652 ON plant_course');
        $this->addSql('ALTER TABLE plant_course DROP plant_id');
    }
}
