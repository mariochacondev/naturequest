<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210129162216 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE geolocalisation (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, latitude VARCHAR(255) NOT NULL, longitude VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE button_animal ADD next_step_id_id INT DEFAULT NULL, ADD step_id_id INT NOT NULL, ADD img VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE button_animal ADD CONSTRAINT FK_24243CFEDCF1826B FOREIGN KEY (next_step_id_id) REFERENCES course_animal (id)');
        $this->addSql('ALTER TABLE button_animal ADD CONSTRAINT FK_24243CFE636669A8 FOREIGN KEY (step_id_id) REFERENCES course_animal (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_24243CFEDCF1826B ON button_animal (next_step_id_id)');
        $this->addSql('CREATE INDEX IDX_24243CFE636669A8 ON button_animal (step_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE geolocalisation');
        $this->addSql('ALTER TABLE button_animal DROP FOREIGN KEY FK_24243CFEDCF1826B');
        $this->addSql('ALTER TABLE button_animal DROP FOREIGN KEY FK_24243CFE636669A8');
        $this->addSql('DROP INDEX UNIQ_24243CFEDCF1826B ON button_animal');
        $this->addSql('DROP INDEX IDX_24243CFE636669A8 ON button_animal');
        $this->addSql('ALTER TABLE button_animal DROP next_step_id_id, DROP step_id_id, DROP img');
    }
}
