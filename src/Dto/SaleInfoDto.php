<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class SaleInfoDto
{
    public string $country;
    public string $saleability;
    public string|bool $isEbook;

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getSaleability(): string
    {
        return $this->saleability;
    }

    public function setSaleability(string $saleability): self
    {
        $this->saleability = $saleability;

        return $this;
    }

    public function isIsEbook(): bool
    {
        return $this->isEbook;
    }

    public function setIsEbook(bool $isEbook): self
    {
        $this->isEbook = $isEbook;

        return $this;
    }
}
?>