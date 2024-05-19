<?php
namespace App\Model;

class VolumeSearch
{
    private int $id;

    private string $search = '';

    public function getId(): int
    {
        return $this->id;
    }

    public function getSearch(): string
    {
        return $this->search;
    }

    public function setSearch(string $search): self
    {
        $this->search = $search;

        return $this;
    }
}
