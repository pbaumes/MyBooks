<?php
namespace App\Service;

use App\Dto\VolumeDto;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class VolumeService {

    public function __construct(
        private SerializerInterface $serializer,
        private DenormalizerInterface $denormalizer,
        private HttpClientInterface $googleBooksClient,
    ) {
    }

    public function hydrate(array $volumes, VolumeDto $input): VolumeDto|array
    {
        foreach($volumes['items'] as $item) {  
            $volumes[] = $this->serializer->deserialize(json_encode($item), VolumeDto::class, 'json');
        }

        return $volumes;
    }

    public function getVolumeBySearch(string $searchWords): array
    {
        $response = $this->googleBooksClient->request('GET', '/books/v1/volumes?q='.$searchWords);
        
        if (200 === $response->getStatusCode()) {
            return $this->hydrate($response->toArray(), new VolumeDto());
        } else {
            throw new \Exception('Something is broken...');
        }
    }
}
?>