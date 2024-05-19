<?php

namespace App\Dto;

use Symfony\Component\Validator\Constraints as Assert;
use App\Dto\VolumeInfoDto;
use App\Dto\SaleInfoDto;
use App\Dto\AccessInfoDto;

class VolumeDto
{
    #[Assert\NotBlank]
    public string $kind;
    #[Assert\NotBlank]
    public string $id;
    public string $etag;
    public string $selfLink;
    #[Assert\Valid]
    public VolumeInfoDto $volumeInfo;
    #[Assert\Valid]
    public SaleInfoDto $saleInfo;
    #[Assert\Valid]
    public AccessInfoDto|array $accessInfo;
    public array $searchInfo;

	public function getKind(): string 
    {
		return $this->kind;
	}

	public function setKind(string $kind): self 
    {
		$this->kind = $kind;

        return $this;
	}

	public function getId(): string 
    {
		return $this->id;
	}

	public function setId(string $id): self {
		$this->id = $id;

        return $this;
	}

	public function getEtag(): string 
    {
		return $this->etag;
	}

	public function setEtag(string $etag): self 
    {
		$this->etag = $etag;

        return $this;
	}

	public function getSelfLink(): string {
		return $this->selfLink;
	}

	public function setSelfLink(string $selfLink): self {
		$this->selfLink = $selfLink;

        return $this;
	}  

	public function getVolumeInfo(): VolumeInfoDto {
		return $this->volumeInfo;
	}

	public function setVolumeInfo(VolumeInfoDto $volumeInfo): self {
		$this->volumeInfo = $volumeInfo;

        return $this;
	}    

	public function getSaleInfo(): SaleInfoDto {
		return $this->saleInfo;
	}

	public function setSaleInfo(SaleInfoDto $saleInfo): self {
		$this->saleInfo = $saleInfo;

        return $this;
	}   

	public function getAccessInfo(): AccessInfoDto|array {
		return $this->accessInfo;
	}

	public function setAccessInfo(AccessInfoDto|array $accessInfo): self {
		$this->accessInfo = $accessInfo;

        return $this;
	}    

	public function getSearchInfo(): array {
		return $this->searchInfo;
	}

	public function setSearchInfo(array $searchInfo): self {
		$this->searchInfo = $searchInfo;

        return $this;
	}    
}
?>