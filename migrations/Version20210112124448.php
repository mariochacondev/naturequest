<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210112124448 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plant ADD image2 VARCHAR(255) NOT NULL, ADD image3 VARCHAR(255) NOT NULL, ADD image4 VARCHAR(255) NOT NULL, CHANGE image image1 VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE plant_course ADD plant_id INT NOT NULL');
        $this->addSql('ALTER TABLE plant_course ADD CONSTRAINT FK_F50EBE321D935652 FOREIGN KEY (plant_id) REFERENCES plant (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F50EBE321D935652 ON plant_course (plant_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plant ADD image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP image1, DROP image2, DROP image3, DROP image4');
        $this->addSql('ALTER TABLE plant_course DROP FOREIGN KEY FK_F50EBE321D935652');
        $this->addSql('DROP INDEX UNIQ_F50EBE321D935652 ON plant_course');
        $this->addSql('ALTER TABLE plant_course DROP plant_id');
    }
}
