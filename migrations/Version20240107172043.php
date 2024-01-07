<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240107172043 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE number_day_off DROP FOREIGN KEY FK_E5FE46F99D86650F');
        $this->addSql('DROP INDEX UNIQ_E5FE46F99D86650F ON number_day_off');
        $this->addSql('ALTER TABLE number_day_off CHANGE user_id_id user_day_id INT NOT NULL');
        $this->addSql('ALTER TABLE number_day_off ADD CONSTRAINT FK_E5FE46F96C905A1B FOREIGN KEY (user_day_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E5FE46F96C905A1B ON number_day_off (user_day_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE number_day_off DROP FOREIGN KEY FK_E5FE46F96C905A1B');
        $this->addSql('DROP INDEX UNIQ_E5FE46F96C905A1B ON number_day_off');
        $this->addSql('ALTER TABLE number_day_off CHANGE user_day_id user_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE number_day_off ADD CONSTRAINT FK_E5FE46F99D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E5FE46F99D86650F ON number_day_off (user_id_id)');
    }
}
