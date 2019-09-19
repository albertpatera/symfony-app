<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190919132736 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article CHANGE title title VARCHAR(255) NOT NULL, CHANGE content content LONGTEXT NOT NULL, CHANGE url url VARCHAR(255) NOT NULL, CHANGE title_image title_image LONGTEXT NOT NULL, CHANGE article_id article_id INT NOT NULL, CHANGE date_created date_created LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE menu ADD redirent_to_url VARCHAR(255) DEFAULT NULL, DROP redirect_to_url, CHANGE name name LONGTEXT NOT NULL, CHANGE description description LONGTEXT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article CHANGE article_id article_id INT DEFAULT NULL, CHANGE title title TEXT DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE content content TEXT DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE url url TEXT DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE title_image title_image TEXT DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE date_created date_created DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE menu ADD redirect_to_url TEXT DEFAULT NULL COLLATE latin1_swedish_ci, DROP redirent_to_url, CHANGE name name TEXT DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE description description TEXT DEFAULT NULL COLLATE latin1_swedish_ci');
    }
}
