<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211215103955 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO admin (id, username, roles, password) VALUES ('1', 'admin', '[\"ROLE_ADMIN\"]', '\$argon2id\$v=19\$m=65536,t=4,p=1\$SKa5SsN1ClaAaEhSCh4WSg\$CXXNNWnJDOBRq33rTe83cUK/JhpUFUf7Ah/agjct2Qw')");
        $this->addSql("INSERT INTO admin (id, username, roles, password) VALUES ('2', 'Guy-Guyon', '[\"ROLE_ADMIN\"]', '\$argon2id\$v=19\$m=65536,t=4,p=1\$o6dic+oAza2xZyhuPgN0gw\$QkvMcJvUx5cNidwc5lSEM2PV9U0j+lIuNG6dx1RgBsM')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
    }
}
