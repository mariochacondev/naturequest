<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210128155613 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_880E0D76F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE button_animal (id INT AUTO_INCREMENT NOT NULL, final_sheet_id_id INT DEFAULT NULL, content VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_24243CFEEAAB3AE1 (final_sheet_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE button_plant (id INT AUTO_INCREMENT NOT NULL, final_sheet_id_id INT DEFAULT NULL, step_id_id INT NOT NULL, content VARCHAR(255) NOT NULL, img VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_209FB890EAAB3AE1 (final_sheet_id_id), INDEX IDX_209FB890636669A8 (step_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE course_animal (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE course_plant (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE final_sheet (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, subtitle VARCHAR(255) NOT NULL, picture1 VARCHAR(255) NOT NULL, picture2 VARCHAR(255) NOT NULL, picture3 VARCHAR(255) NOT NULL, picture4 VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE button_animal ADD CONSTRAINT FK_24243CFEEAAB3AE1 FOREIGN KEY (final_sheet_id_id) REFERENCES final_sheet (id)');
        $this->addSql('ALTER TABLE button_plant ADD CONSTRAINT FK_209FB890EAAB3AE1 FOREIGN KEY (final_sheet_id_id) REFERENCES final_sheet (id)');
        $this->addSql('ALTER TABLE button_plant ADD CONSTRAINT FK_209FB890636669A8 FOREIGN KEY (step_id_id) REFERENCES course_plant (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button_plant DROP FOREIGN KEY FK_209FB890636669A8');
        $this->addSql('ALTER TABLE button_animal DROP FOREIGN KEY FK_24243CFEEAAB3AE1');
        $this->addSql('ALTER TABLE button_plant DROP FOREIGN KEY FK_209FB890EAAB3AE1');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE button_animal');
        $this->addSql('DROP TABLE button_plant');
        $this->addSql('DROP TABLE course_animal');
        $this->addSql('DROP TABLE course_plant');
        $this->addSql('DROP TABLE final_sheet');
    }
}
