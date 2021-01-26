<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210125151226 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE button_plant (id INT AUTO_INCREMENT NOT NULL, final_sheet_plant_id_id INT DEFAULT NULL, next_step_id_id INT DEFAULT NULL, step_id_id INT NOT NULL, content VARCHAR(255) NOT NULL, img VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_209FB890B06EE594 (final_sheet_plant_id_id), UNIQUE INDEX UNIQ_209FB890DCF1826B (next_step_id_id), INDEX IDX_209FB890636669A8 (step_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE button_plant ADD CONSTRAINT FK_209FB890B06EE594 FOREIGN KEY (final_sheet_plant_id_id) REFERENCES final_sheet_plant (id)');
        $this->addSql('ALTER TABLE button_plant ADD CONSTRAINT FK_209FB890DCF1826B FOREIGN KEY (next_step_id_id) REFERENCES course_plant (id)');
        $this->addSql('ALTER TABLE button_plant ADD CONSTRAINT FK_209FB890636669A8 FOREIGN KEY (step_id_id) REFERENCES course_plant (id)');
        $this->addSql('DROP TABLE button');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE button (id INT AUTO_INCREMENT NOT NULL, final_sheet_plant_id_id INT DEFAULT NULL, next_step_id_id INT DEFAULT NULL, step_id_id INT NOT NULL, content VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, img VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_3A06AC3D636669A8 (step_id_id), UNIQUE INDEX UNIQ_3A06AC3DDCF1826B (next_step_id_id), UNIQUE INDEX UNIQ_3A06AC3DB06EE594 (final_sheet_plant_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE button ADD CONSTRAINT FK_3A06AC3D636669A8 FOREIGN KEY (step_id_id) REFERENCES course_plant (id)');
        $this->addSql('ALTER TABLE button ADD CONSTRAINT FK_3A06AC3DB06EE594 FOREIGN KEY (final_sheet_plant_id_id) REFERENCES final_sheet_plant (id)');
        $this->addSql('ALTER TABLE button ADD CONSTRAINT FK_3A06AC3DDCF1826B FOREIGN KEY (next_step_id_id) REFERENCES course_plant (id)');
        $this->addSql('DROP TABLE button_plant');
    }
}
