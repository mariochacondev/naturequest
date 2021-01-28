<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210128145412 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE button_animal (id INT AUTO_INCREMENT NOT NULL, next_step_id_id INT DEFAULT NULL, step_id_id INT DEFAULT NULL, final_sheet_id_id INT DEFAULT NULL, text VARCHAR(255) NOT NULL, picture VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_24243CFEDCF1826B (next_step_id_id), INDEX IDX_24243CFE636669A8 (step_id_id), UNIQUE INDEX UNIQ_24243CFEEAAB3AE1 (final_sheet_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parcours_animal (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE button_animal ADD CONSTRAINT FK_24243CFEDCF1826B FOREIGN KEY (next_step_id_id) REFERENCES parcours_animal (id)');
        $this->addSql('ALTER TABLE button_animal ADD CONSTRAINT FK_24243CFE636669A8 FOREIGN KEY (step_id_id) REFERENCES parcours_animal (id)');
        $this->addSql('ALTER TABLE button_animal ADD CONSTRAINT FK_24243CFEEAAB3AE1 FOREIGN KEY (final_sheet_id_id) REFERENCES final_sheet (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_animal DROP FOREIGN KEY FK_24243CFEDCF1826B');
        $this->addSql('ALTER TABLE button_animal DROP FOREIGN KEY FK_24243CFE636669A8');
        $this->addSql('DROP TABLE button_animal');
        $this->addSql('DROP TABLE parcours_animal');
    }
}
