<?php

namespace app\Database;

class DatabasePDOConnection implements DatabaseConnection
{
    public function __construct(
        private readonly DatabaseConfiguration $configuration,
    ) {
    }

    public function connection(): \PDO
    {
        return new \PDO(
            $this->getDSN(),
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getOptions(),
        );
    }

    public function getDSN(): string
    {
        return \sprintf(
            '%s:host=%s;dbname=%s;charset=%s',
            $this->configuration->getPort(),
            $this->configuration->getHost(),
            $this->configuration->getDbname(),
            $this->configuration->getCharset(),
        );
    }

}
