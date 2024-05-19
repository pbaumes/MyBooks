<?php

namespace App\Dto;

class VolumeInfoDto
{
    public string $title;
    public array $authors;
    public string $publisher;
    public string $publishedDate;
    public string $description;
    public array $industryIdentifiers;
    public array $readingModes;
    public int $pageCount;
    public string $pageCoprintTypeunt;
    public array $categories;
    public float $averageRating;
    public int $ratingsCount;
    public string $maturityRating;
    public bool $allowAnonLogging;
    public string $contentVersion;
    public array $imageLinks;
    public string $language;
    public string $previewLink;
    public string $infoLink;
    public string $canonicalVolumeLink;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthors(): array
    {
        return $this->authors;
    }

    public function setAuthors(array $authors): self
    {
        $this->authors = $authors;

        return $this;
    }

    public function getPublisher(): string
    {
        return $this->publisher;
    }

    public function setPublisher(string $publisher): self
    {
        $this->publisher = $publisher;

        return $this;
    }

    public function getPublishedDate(): string
    {
        return $this->publishedDate;
    }

    public function setPublishedDate(string $publishedDate): self
    {
        $this->publishedDate = $publishedDate;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIndustryIdentifiers(): array
    {
        return $this->industryIdentifiers;
    }

    public function setIndustryIdentifiers(array $industryIdentifiers): self
    {
        $this->industryIdentifiers = $industryIdentifiers;

        return $this;
    }

    public function getReadingModes(): array
    {
        return $this->readingModes;
    }

    public function setReadingModes(array $readingModes): self
    {
        $this->readingModes = $readingModes;

        return $this;
    }

    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    public function setPageCount(int $pageCount): self
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    public function getPageCoprintTypeunt(): string
    {
        return $this->pageCoprintTypeunt;
    }

    public function setPageCoprintTypeunt(string $pageCoprintTypeunt): self
    {
        $this->pageCoprintTypeunt = $pageCoprintTypeunt;

        return $this;
    }

    public function getCategories(): array
    {
        return $this->categories;
    }

    public function setCategories(array $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getAverageRating(): float
    {
        return $this->averageRating;
    }

    public function setAverageRating(float $averageRating): self
    {
        $this->averageRating = $averageRating;

        return $this;
    }

    public function getRatingsCount(): int
    {
        return $this->ratingsCount;
    }

    public function setRatingsCount(int $ratingsCount): self
    {
        $this->ratingsCount = $ratingsCount;

        return $this;
    }

    public function getMaturityRating(): string
    {
        return $this->maturityRating;
    }

    public function setMaturityRating(string $maturityRating): self
    {
        $this->maturityRating = $maturityRating;

        return $this;
    }

    public function isAllowAnonLogging(): bool
    {
        return $this->allowAnonLogging;
    }

    public function setAllowAnonLogging(bool $allowAnonLogging): self
    {
        $this->allowAnonLogging = $allowAnonLogging;

        return $this;
    }

    public function getContentVersion(): string
    {
        return $this->contentVersion;
    }

    public function setContentVersion(string $contentVersion): self
    {
        $this->contentVersion = $contentVersion;

        return $this;
    }

    public function getImageLinks(): array
    {
        return $this->imageLinks;
    }

    public function setImageLinks(array $imageLinks): self
    {
        $this->imageLinks = $imageLinks;

        return $this;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getPreviewLink(): string
    {
        return $this->previewLink;
    }

    public function setPreviewLink(string $previewLink): self
    {
        $this->previewLink = $previewLink;

        return $this;
    }

    public function getInfoLink(): string
    {
        return $this->infoLink;
    }

    public function setInfoLink(string $infoLink): self
    {
        $this->infoLink = $infoLink;

        return $this;
    }

    public function getCanonicalVolumeLink(): string
    {
        return $this->canonicalVolumeLink;
    }

    public function setCanonicalVolumeLink(string $canonicalVolumeLink): self
    {
        $this->canonicalVolumeLink = $canonicalVolumeLink;

        return $this;
    }
}
?>