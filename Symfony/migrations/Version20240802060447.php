<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240802060447 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD first_name VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL, ADD personal_email VARCHAR(255) NOT NULL, ADD mobile_number VARCHAR(20) NOT NULL, ADD landline_number VARCHAR(20) DEFAULT NULL, ADD company_email VARCHAR(255) NOT NULL, ADD company_website VARCHAR(255) DEFAULT NULL, ADD company_contact_number VARCHAR(20) DEFAULT NULL, CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649BFCB3A62 ON user (personal_email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_8D93D649BFCB3A62 ON user');
        $this->addSql('ALTER TABLE user DROP first_name, DROP last_name, DROP personal_email, DROP mobile_number, DROP landline_number, DROP company_email, DROP company_website, DROP company_contact_number, CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
    }
}
