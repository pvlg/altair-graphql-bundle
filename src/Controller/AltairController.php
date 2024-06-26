<?php

declare(strict_types=1);

namespace Pvlg\Bundle\AltairGraphqlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AltairController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('@AltairGraphql/altair.html.twig', [
            'endpointURL' => '/graphql',
        ]);
    }
}