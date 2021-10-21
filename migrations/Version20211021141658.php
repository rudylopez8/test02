<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211021141658 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles ADD resume VARCHAR(255) NOT NULL, ADD image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE categorie CHANGE resum resumã© VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateurs ADD prã©noms VARCHAR(255) NOT NULL, ADD rã´le VARCHAR(255) NOT NULL, DROP pr??noms, DROP r??le, CHANGE propri??taires propriã©taires TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP resume, DROP image');
        $this->addSql('ALTER TABLE categorie CHANGE resumã© resum VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE utilisateurs ADD pr??noms VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD r??le VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP prã©noms, DROP rã´le, CHANGE propriã©taires propri??taires TINYINT(1) NOT NULL');
    }
}
