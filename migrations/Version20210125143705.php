<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210125143705 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plant_course DROP FOREIGN KEY FK_F50EBE321D935652');
        $this->addSql('CREATE TABLE button (id INT AUTO_INCREMENT NOT NULL, final_sheet_id_id INT DEFAULT NULL, next_step_id_id INT DEFAULT NULL, step_id_id INT NOT NULL, content VARCHAR(255) NOT NULL, img VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_3A06AC3DEAAB3AE1 (final_sheet_id_id), UNIQUE INDEX UNIQ_3A06AC3DDCF1826B (next_step_id_id), INDEX IDX_3A06AC3D636669A8 (step_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE course_plant (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE final_sheet (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, subtitle VARCHAR(255) NOT NULL, tree_picture VARCHAR(255) NOT NULL, leaf_picture VARCHAR(255) NOT NULL, bark_picture VARCHAR(255) NOT NULL, seed_picture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE button ADD CONSTRAINT FK_3A06AC3DEAAB3AE1 FOREIGN KEY (final_sheet_id_id) REFERENCES final_sheet (id)');
        $this->addSql('ALTER TABLE button ADD CONSTRAINT FK_3A06AC3DDCF1826B FOREIGN KEY (next_step_id_id) REFERENCES course_plant (id)');
        $this->addSql('ALTER TABLE button ADD CONSTRAINT FK_3A06AC3D636669A8 FOREIGN KEY (step_id_id) REFERENCES course_plant (id)');
        $this->addSql('DROP TABLE animal_course');
        $this->addSql('DROP TABLE animals');
        $this->addSql('DROP TABLE plant');
        $this->addSql('DROP TABLE plant_course');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button DROP FOREIGN KEY FK_3A06AC3DDCF1826B');
        $this->addSql('ALTER TABLE button DROP FOREIGN KEY FK_3A06AC3D636669A8');
        $this->addSql('ALTER TABLE button DROP FOREIGN KEY FK_3A06AC3DEAAB3AE1');
        $this->addSql('CREATE TABLE animal_course (id INT AUTO_INCREMENT NOT NULL, button VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, icon VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE animals (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, content VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE plant (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, content LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image1 VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image2 VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image3 VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image4 VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE plant_course (id INT AUTO_INCREMENT NOT NULL, plant_id INT DEFAULT NULL, button VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, icon VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_F50EBE321D935652 (plant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE plant_course ADD CONSTRAINT FK_F50EBE321D935652 FOREIGN KEY (plant_id) REFERENCES plant (id)');
        $this->addSql('DROP TABLE button');
        $this->addSql('DROP TABLE course_plant');
        $this->addSql('DROP TABLE final_sheet');
    }
}
