<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;

class SaleInfoDto
{
    public string $country;
    public string $saleability;
    public bool $isEbook;
}
?>