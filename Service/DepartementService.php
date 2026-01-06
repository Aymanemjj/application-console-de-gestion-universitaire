<?php

class DepartementService
{
    private DepartmentRepository $repo;

    public function __construct(DepartmentRepository $re)
    {
        $this->repo = $re;
    }
    
    public function create($name, $description)
    {
        $departement = new Departement();
        $departement->setName($name);
        $departement->setDescription($description);

        $this->repo->save($departement);
    }

    public function findByName(string $name)
    {
        $nameExist = $this->repo->findByName($name);

        if(!$nameExist)
        {
            echo 'There is no name like this';
            return null;
        } else {
            return $nameExist;
        }
    }

    public function update($oldname, $name, $description)
    {
        $newDepartement = $this->repo->findByName($oldname);
        if(!$newDepartement) {
            echo 'There is no name like this';
            return;
        }

        $newDepartement->setName($name);
        $newDepartement->setDescription($description);

        $this->repo->update($newDepartement, $oldname);
    }

    public function delete($oldname)
    {
        $departement = $this->repo->findByName($oldname);
        if(!$departement) {
            echo 'There is no departement with thin name';
            return;
        }

        $this->repo->delete($oldname);
    }

    public function listAll()
    {
        $departements = [];
        $list = $this->repo->findAll();

        foreach($list as $departement) {
            echo $departement['name'] . " " . $departement['description'] . "<br>";
        }
    }
}