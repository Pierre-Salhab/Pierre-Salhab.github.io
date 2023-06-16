<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230608134406 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE event_npc (event_id INT NOT NULL, npc_id INT NOT NULL, INDEX IDX_5743B3FF71F7E88B (event_id), INDEX IDX_5743B3FFCA7D6B89 (npc_id), PRIMARY KEY(event_id, npc_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event_npc ADD CONSTRAINT FK_5743B3FF71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_npc ADD CONSTRAINT FK_5743B3FFCA7D6B89 FOREIGN KEY (npc_id) REFERENCES npc (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event_npc DROP FOREIGN KEY FK_5743B3FF71F7E88B');
        $this->addSql('ALTER TABLE event_npc DROP FOREIGN KEY FK_5743B3FFCA7D6B89');
        $this->addSql('DROP TABLE event_npc');
    }
}
