<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190913094023 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE elements');
        $this->addSql('DROP TABLE new_table');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE article MODIFY article_id INT NOT NULL');
        $this->addSql('DROP INDEX url ON article');
        $this->addSql('ALTER TABLE article DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE article DROP description, CHANGE title title VARCHAR(255) NOT NULL, CHANGE content content LONGTEXT NOT NULL, CHANGE url url VARCHAR(255) NOT NULL, CHANGE title_image title_image LONGTEXT NOT NULL, CHANGE article_id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE article ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE elements (id INT AUTO_INCREMENT NOT NULL, title_image TEXT DEFAULT NULL COLLATE utf8_czech_ci, visible INT DEFAULT NULL, main_title TEXT DEFAULT NULL COLLATE utf8_czech_ci, type VARCHAR(255) DEFAULT NULL COLLATE utf8_czech_ci, perex TEXT DEFAULT NULL COLLATE utf8_czech_ci, INDEX id (id, visible, type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE new_table (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, description TEXT DEFAULT NULL COLLATE latin1_swedish_ci, date_created DATETIME DEFAULT NULL, title_image TEXT DEFAULT NULL COLLATE latin1_swedish_ci, hp TINYINT(1) DEFAULT NULL, url TEXT DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, role VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, url VARCHAR(255) DEFAULT NULL COLLATE latin1_swedish_ci, sign TEXT DEFAULT NULL COLLATE latin1_swedish_ci, prof_image TEXT DEFAULT NULL COLLATE latin1_swedish_ci, hp TINYINT(1) DEFAULT NULL, password TEXT DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE article MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE article DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE article ADD description VARCHAR(255) DEFAULT NULL COLLATE utf8_czech_ci, CHANGE title title VARCHAR(255) DEFAULT NULL COLLATE utf8_czech_ci, CHANGE content content TEXT DEFAULT NULL COLLATE utf8_czech_ci, CHANGE url url VARCHAR(255) DEFAULT NULL COLLATE utf8_czech_ci, CHANGE title_image title_image TEXT DEFAULT NULL COLLATE utf8_czech_ci, CHANGE id article_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX url ON article (url)');
        $this->addSql('ALTER TABLE article ADD PRIMARY KEY (article_id)');
    }
}
