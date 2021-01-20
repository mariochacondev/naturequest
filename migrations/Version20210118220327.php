<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210118220327 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE plant (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, picture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE route_plant (id INT AUTO_INCREMENT NOT NULL, id_plant_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, INDEX IDX_367C3FDC4D48BAC7 (id_plant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE route_plant ADD CONSTRAINT FK_367C3FDC4D48BAC7 FOREIGN KEY (id_plant_id) REFERENCES plant (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE route_plant DROP FOREIGN KEY FK_367C3FDC4D48BAC7');
        $this->addSql('DROP TABLE plant');
        $this->addSql('DROP TABLE route_plant');
    }
}
