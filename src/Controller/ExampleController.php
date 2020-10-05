<?php

declare(strict_types=1);


namespace App\Controller;


use App\Example\ExampleDTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface;

final class ExampleController extends AbstractController
{
    public function dumpTypesAction(PropertyInfoExtractorInterface $propertyInfoExtractor): Response
    {
        dd($propertyInfoExtractor->getTypes(ExampleDTO::class, 'example'));
    }
}
