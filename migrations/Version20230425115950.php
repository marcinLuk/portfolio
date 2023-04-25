<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230425115950 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE project_techstack (project_id INT NOT NULL, techstack_id INT NOT NULL, INDEX IDX_1B023A47166D1F9C (project_id), INDEX IDX_1B023A47F2940558 (techstack_id), PRIMARY KEY(project_id, techstack_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE project_techstack ADD CONSTRAINT FK_1B023A47166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_techstack ADD CONSTRAINT FK_1B023A47F2940558 FOREIGN KEY (techstack_id) REFERENCES techstack (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EEF2940558');
        $this->addSql('DROP INDEX IDX_2FB3D0EEF2940558 ON project');
        $this->addSql('ALTER TABLE project DROP techstack_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_techstack DROP FOREIGN KEY FK_1B023A47166D1F9C');
        $this->addSql('ALTER TABLE project_techstack DROP FOREIGN KEY FK_1B023A47F2940558');
        $this->addSql('DROP TABLE project_techstack');
        $this->addSql('ALTER TABLE project ADD techstack_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EEF2940558 FOREIGN KEY (techstack_id) REFERENCES techstack (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_2FB3D0EEF2940558 ON project (techstack_id)');
    }
}
