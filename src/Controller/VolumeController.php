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
        private SerializerInterface $serializer,
        private VolumeService $volumeService
    ) {
    }

    #[Route('/list', name: 'list')]
    public function list(
        Request $request,
        VolumeService $volumeService
    ) {
        $volumes = $request->query->all('volumes');

        return $this->render('volume/list.html.twig', [
            'volumes' => $volumes['items']
        ]);
    }

    #[Route('/search', name: 'search')]
    public function search(
        Request $request
    ) {
        $volumes = null;
        $volume = new VolumeSearch();
        $form = $this->createForm(VolumeSearchType::class, $volume);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $searchWords = $form->get('search')->getData();

            $volumes = $this->volumeService->getVolumeBySearch($searchWords);

            return $this->redirectToRoute('volume_list', ['volumes' => $volumes]);
        }

        return $this->render('volume/search.html.twig', [
            'form' => $form
        ]);
    }
}

?>