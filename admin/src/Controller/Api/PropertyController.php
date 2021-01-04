<?php

namespace App\Controller\Api;

use App\Entity\ApplicationAssets;
use App\Entity\Features;
use App\Entity\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @Route("api/properties", name="api_property_list")
     */
    public function index(): Response
    {
        header('Access-Control-Allow-Origin: *');
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $repository = $this->getDoctrine()->getRepository(Property::class)->getFilterData(array('pd.webFeaturedListing' => 1));
        $property = [];
        foreach ($repository as $key => $value) {
            $value = $value[0];
            $assets = $this->getDoctrine()->getRepository(ApplicationAssets::class)->findBy(['property' => $value['id'], 'slno' => 1]);
            if (!empty($assets)) {
                $value['assets'] = $assets[0]->getUrl();
            }
            $property[] = $value;
        }
        return $response = new JsonResponse(['data' => $property]);
    }

    /**
     * @Route("api/properties/{pid}/status/{status}", name="api_property_status")
     */
    public function changeStatus($pid, $status): Response
    {
        header('Access-Control-Allow-Origin: *');
        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $property = $this->getDoctrine()->getRepository(Property::class)->findOneById($pid);
        $property->setStatus($status);
        $entityManager->persist($property);
        $entityManager->flush();
        return $response = new JsonResponse(['data' => 1]);
    }

    /**
     * @Route("api/properties/search", name="api_property")
     */
    public function search(Request $request): Response
    {
        header('Access-Control-Allow-Origin: *');

        $param = $request->query->all();
        $origin = $param['Origin'] ?? null;
        $propertyType = $param['propertyType'] ?? null;
        $propertyPrice = $param['propertyPrice'] ?? null;
        $propertyBedrooms = $param['Bedrooms'] ?? null;
        $propertyBathrooms = $param['Bathrooms'] ?? null;
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $advance = empty($propertyPrice) ? null :
        array(
            'btw' => array(
                'p.value' => explode('-', trim($propertyPrice)),
            ),
        );
        $repository = $this->getDoctrine()->getRepository(Property::class)
            ->getFilterData(
                array(
                    'p.location' => trim($origin),
                    'p.bedRooms' => trim($propertyBedrooms),
                    'p.BathRooms' => trim($propertyBathrooms),
                    'pt.name' => trim($propertyType),
                ),
                'search',
                $advance
            );
        $property = [];
        foreach ($repository as $key => $value) {
            $value = $value[0];
            $assets = $this->getDoctrine()->getRepository(ApplicationAssets::class)->findBy(['property' => $value['id'], 'slno' => 1]);
            if (!empty($assets)) {
                $value['assets'] = $assets[0]->getUrl();
            }
            $property[] = $value;
        }
        return $response = new JsonResponse(['data' => $property]);
    }

    /**
     * @Route("api/properties/details", name="single_property")
     */
    public function singleProduct(Request $request): Response
    {
        $param = $request->query->all();
        $id = $param['id'];
        $property = $this->getDoctrine()->getRepository(Property::class)
            ->getFilterData(
                array(
                    'p.id' => $id,
                ),
                'search',
                null
            );
        $features = $property[0][0]['features'] ?? null;
        $propertyFeatures = $this->getDoctrine()->getRepository(Features::class)->findListByIds($features);
        $propertyAssets = $this->getDoctrine()->getRepository(ApplicationAssets::class)->feathByPropertyId($id);
        return $response = new JsonResponse([
            'data' => $property[0],
            'assets' => $propertyAssets,
            'features' => $propertyFeatures,
        ]);
    }
}
