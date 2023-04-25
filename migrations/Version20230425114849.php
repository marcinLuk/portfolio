<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230425114849 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_techstack ADD PRIMARY KEY (project_id, techstack_id)');
        $this->addSql('ALTER TABLE project_techstack ADD CONSTRAINT FK_1B023A47166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_techstack ADD CONSTRAINT FK_1B023A47F2940558 FOREIGN KEY (techstack_id) REFERENCES techstack (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_techstack DROP FOREIGN KEY FK_1B023A47166D1F9C');
        $this->addSql('ALTER TABLE project_techstack DROP FOREIGN KEY FK_1B023A47F2940558');
        $this->addSql('DROP INDEX `primary` ON project_techstack');
    }
}
