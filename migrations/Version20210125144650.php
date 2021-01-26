<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210125144650 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button DROP FOREIGN KEY FK_3A06AC3DEAAB3AE1');
        $this->addSql('CREATE TABLE final_sheet_plant (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, subtitle VARCHAR(255) NOT NULL, tree_picture VARCHAR(255) NOT NULL, leaf_picture VARCHAR(255) NOT NULL, bark_picture VARCHAR(255) NOT NULL, seed_picture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE final_sheet');
        $this->addSql('DROP INDEX UNIQ_3A06AC3DEAAB3AE1 ON button');
        $this->addSql('ALTER TABLE button CHANGE final_sheet_id_id final_sheet_plant_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE button ADD CONSTRAINT FK_3A06AC3DB06EE594 FOREIGN KEY (final_sheet_plant_id_id) REFERENCES final_sheet_plant (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3A06AC3DB06EE594 ON button (final_sheet_plant_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE button DROP FOREIGN KEY FK_3A06AC3DB06EE594');
        $this->addSql('CREATE TABLE final_sheet (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, subtitle VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, tree_picture VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, leaf_picture VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, bark_picture VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, seed_picture VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE final_sheet_plant');
        $this->addSql('DROP INDEX UNIQ_3A06AC3DB06EE594 ON button');
        $this->addSql('ALTER TABLE button CHANGE final_sheet_plant_id_id final_sheet_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE button ADD CONSTRAINT FK_3A06AC3DEAAB3AE1 FOREIGN KEY (final_sheet_id_id) REFERENCES final_sheet (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3A06AC3DEAAB3AE1 ON button (final_sheet_id_id)');
    }
}
