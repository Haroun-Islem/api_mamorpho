<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230604121125 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(100) NOT NULL, name VARCHAR(100) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles INT NOT NULL, phone VARCHAR(14) DEFAULT NULL, status TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', monthly TINYINT(1) DEFAULT NULL, status_subscrition TINYINT(1) NOT NULL, started_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ended_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', age INT DEFAULT NULL, size DOUBLE PRECISION DEFAULT NULL, weight INT DEFAULT NULL, morphology VARCHAR(255) DEFAULT NULL, photo_profile VARCHAR(255) NOT NULL, sexe VARCHAR(25) NOT NULL, circumference_pelvis DOUBLE PRECISION DEFAULT NULL, circumference_chest DOUBLE PRECISION DEFAULT NULL, circumference_waist DOUBLE PRECISION DEFAULT NULL, body_form VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
    }
}
