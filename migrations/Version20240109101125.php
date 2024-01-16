<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240109101125 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE number_day_off ADD cet INT NOT NULL, ADD hours_available DOUBLE PRECISION NOT NULL, DROP got, DROP got_out_period, CHANGE available available INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE number_day_off ADD got_out_period DOUBLE PRECISION NOT NULL, DROP cet, CHANGE available available DOUBLE PRECISION NOT NULL, CHANGE hours_available got DOUBLE PRECISION NOT NULL');
    }
}
