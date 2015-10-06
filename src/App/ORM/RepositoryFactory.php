<?php

namespace App\ORM;

class RepositoryFactory {
    public static function get($repository, array $values)
    {
        $repositoryName = '\\App\\ORM\\' . ucfirst($repository) . 'Repository';
        if (!class_exists($repositoryName)) {
            throw new \Exception('Repository ' . $repositoryName . ' does not exist');
        }

        return new $repositoryName($values);
    }
}