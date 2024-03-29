<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240127172722 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, company_abrev VARCHAR(50) NOT NULL, company_phone INT NOT NULL, company_address VARCHAR(255) NOT NULL, company_city VARCHAR(255) NOT NULL, company_zipcode INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', company_email VARCHAR(180) NOT NULL, company_siret BIGINT NOT NULL, company_logo_name VARCHAR(255) DEFAULT NULL, signature_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE number_day_off (id INT AUTO_INCREMENT NOT NULL, user_day_id INT NOT NULL, available INT NOT NULL, cet INT NOT NULL, hours_available DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_E5FE46F96C905A1B (user_day_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, company_id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, lastname VARCHAR(50) NOT NULL, firstname VARCHAR(50) NOT NULL, birthday DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', social_security BIGINT NOT NULL, phone INT NOT NULL, adress VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, zipcode INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', job VARCHAR(255) NOT NULL, profile_picture_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D649979B1AD6 (company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vacation (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, approved INT NOT NULL, start_hours DATETIME DEFAULT NULL, end_hours DATETIME DEFAULT NULL, account INT NOT NULL, nb_days INT NOT NULL, nb_hours DOUBLE PRECISION DEFAULT NULL, nb_days_outside_period INT DEFAULT NULL, INDEX IDX_E3DADF75A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE number_day_off ADD CONSTRAINT FK_E5FE46F96C905A1B FOREIGN KEY (user_day_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('ALTER TABLE vacation ADD CONSTRAINT FK_E3DADF75A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE number_day_off DROP FOREIGN KEY FK_E5FE46F96C905A1B');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649979B1AD6');
        $this->addSql('ALTER TABLE vacation DROP FOREIGN KEY FK_E3DADF75A76ED395');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE number_day_off');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vacation');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
