<?php

class DepartmentRepository
{
    private PDO $pdo;

    public function __construct(DatabaseConnection $db)
    {
        $this->pdo = $db->connection();
    }

    public function save(Departement $departement)
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO departements (id, id_admin, name, description) VALUES (:id, :id_admin, :name, :description)"
        );

        $stmt->execute([
            ':id' => NULL,
            ':id_admin' => 2,
            ':name' => $departement->getName(),
            ':description' => $departement->getDescription()
        ]);
    }

    public function findByName($name)
    {
        $stmt = $this->pdo->prepare(
            "SELECT name, description FROM departements WHERE name = :name"
        );
        $stmt->execute([':name' => $name]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) return null;

        $departement = new Departement();
        $departement->setName($row['name']);
        $departement->setDescription($row['description']);
        return $departement;
    }

    public function update(Departement $newDe, $oldname)
    {
        $stmt = $this->pdo->prepare(
            "UPDATE departements SET name = :name, description = :description WHERE name = :oldname"
        );
        $stmt->execute([
            ':name' => $newDe->getName(),
            ':description' =>$newDe->getDescription(),
            ':oldname' => $oldname
        ]);
    }

    public function delete($name)
    {
        $stmt = $this->pdo->prepare(
            "DELETE FROM departements WHERE name = :name"
        );

        $stmt->execute([':name' => $name]);
    }

    public function findAll()
    {
        $stmt = $this->pdo->prepare(
            "SELECT name, description FROM departements"
        );
        $stmt->execute();

        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $list;
    }
}