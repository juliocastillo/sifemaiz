<?php
// src/Ninfac/ContaBundle/Service/ConsultCatalogos.php

namespace Ninfac\ContaBundle\Service;

use Doctrine\ORM\EntityManager;

class ConsultaCatalogos
{

    private $entityManager;

   public function __construct(EntityManager $entityManager)
   {
       $this->entityManager = $entityManager;
   }

    public function getEmpresa($id)
    {
        $em = $this->entityManager;
        $data = $em->getRepository('NinfacContaBundle:CtlEmpresa')->find($id);
        return $data;
    }

    public function getFormapartida($id)
    {
        $em = $this->entityManager;
        $data = $em->getRepository('NinfacContaBundle:CtlFormapartida')->find($id);
        return $data;
    }

    public function getPeriodocontable($id)
    {
        $em = $this->entityManager;
        $data = $em->getRepository('NinfacContaBundle:CtlPeriodocontable')->find($id);
        return $data;
    }
    public function getAnio($id)
    {
        $em = $this->entityManager;
        $data = $em->getRepository('NinfacContaBundle:CtlAnio')->find($id);
        return $data;
    }
    public function getTipopartida($id)
    {
        $em = $this->entityManager;
        $data = $em->getRepository('NinfacContaBundle:CtlTipopartida')->find($id);
        return $data;
    }

    public function getNumeroPartida($empresaId,$anioId,$tipoPartidaId)
    {
        $em = $this->entityManager;
        $repository = $em
            ->getRepository('NinfacContaBundle:ConPartidacontable');

        // buscar la ultima partida contable para determinar correlativos
        $query = $repository->CreateQueryBuilder('p')
                        ->select('MAX(p.id) as id')
                        ->andWhere('p.idEmpresa = :empresaId AND p.idAnio = :anioId AND p.idTipopartida = :tipoPartida')
                        ->setParameters(array('empresaId'=>$empresaId, 'anioId' => $anioId, 'tipoPartida' => $tipoPartidaId))
                        ->getQuery();
        $data  = $query->getResult();
        $query = $repository->CreateQueryBuilder('p')
                        ->select('p')
                        ->where('p.id = :id')
                        ->setParameter('id', $data[0]['id'])
                        ->getQuery();
        $data  = $query->getResult();

        //$data = $em->getRepository('NinfacContaBundle:CtlAnio')->find($id);
        return $data;
    }



}
