<?php

namespace App\Controller;

use App\Dto\VolumeDto;
use App\Form\VolumeSearchType;
use App\Model\VolumeSearch;
use App\Service\VolumeService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/volumes', name: 'volume_')]
class VolumeController extends AbstractController 
{    
    public function __construct(
        private HttpClientInterface $googleBooksClient,
        private SerializerInterface $serializer
    ) {
    }

    #[Route('/list', name: 'list')]
    public function list(
        Request $request,
        VolumeService $volumeService
    ) {
        $response = $this->googleBooksClient->request('GET', '/books/v1/volumes?q=isbn:0747532699');
        $volumes = $volumeService->hydrate($response->toArray(), new VolumeDto());

        return $this->render('volume/list.html.twig', [
            'volumes' => $volumes
        ]);
    }

    #[Route('/search', name: 'search')]
    public function search(
        Request $request
    ) {
        $volume = new VolumeSearch();
        $form = $this->createForm(VolumeSearchType::class, $volume);

        return $this->render('volume/search.html.twig', [
            'form' => $form
        ]);
    }
}

?>