<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230401204942 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contenido (c_id INT AUTO_INCREMENT NOT NULL, c_tipo_contenido VARCHAR(45) NOT NULL, c_titulo VARCHAR(45) NOT NULL, c_contenido VARCHAR(256) NOT NULL, usuario_u_id INT NOT NULL, PRIMARY KEY(c_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dibujo (d_id INT AUTO_INCREMENT NOT NULL, d_titulo VARCHAR(45) NOT NULL, d_descripcion VARCHAR(256) DEFAULT NULL, d_imagen VARCHAR(256) NOT NULL, d_precio NUMERIC(10, 2) DEFAULT NULL, usuario_u_id INT NOT NULL, PRIMARY KEY(d_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mensaje (m_id INT AUTO_INCREMENT NOT NULL, m_nombre_completo_remitente VARCHAR(256) NOT NULL, m_telefono_remitente VARCHAR(12) NOT NULL, m_correo_remitente VARCHAR(256) NOT NULL, m_mensaje_remitente VARCHAR(512) NOT NULL, m_fecha_envio DATE NOT NULL, usuario_u_id INT NOT NULL, PRIMARY KEY(m_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE contenido');
        $this->addSql('DROP TABLE dibujo');
        $this->addSql('DROP TABLE mensaje');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
