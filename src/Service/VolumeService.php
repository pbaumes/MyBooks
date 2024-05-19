<?php
namespace App\Service;

use App\Dto\VolumeDto;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

class VolumeService {

    public function __construct(
        private SerializerInterface $serializer,
        private DenormalizerInterface $denormalizer
    ) {
    }

    public function hydrate(array $content, VolumeDto $input): VolumeDto|array
    {
        $volumes = [];

        foreach($content['items'] as $item) {  
            $volumes[] = $this->serializer->deserialize(json_encode($item), VolumeDto::class, 'json');
        }

        return $volumes;
    }
}
?>