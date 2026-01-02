<?php

class DepartementService
{
    private array $departements = [];
    
    public function create(Departement $departement)
    {
        array_push($this->departements, $departement);
    }

    public function update(string $oldname, Departement $departement)
    {
        foreach ($this->departements as $index => $currentDepartement) {
            if ($oldname == $currentDepartement->getName()) {
                $this->departements[$index] = $departement;
                return;
            }
        }
    }
    
    public function delete(string $oldname)
    {
        foreach ($this->departements as $index => $currentDepartement) {
            if ($oldname == $currentDepartement->getName()) {
                unset($this->departements[$index]);
                $this->departements = array_values($this->departements);
                return;
            }
        }
    }

    public function getDepartements()
    {
        return $this->departements;
    }

    public function setDepartements($departements)
    {
        $this->departements = $departements;

        return $this;
    }
}