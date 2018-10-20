<?php

/**
 * Description of FacFacturaRepository
 *
 * @author julio
 */

namespace Ninfac\ContaBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ConPartidacontableRepository extends EntityRepository {
    /*
     * DESCRIPCION: consultas generales.
     * Julio Castillo
     * Analista programador
     */
    public function ultimaNumeroAnual($empresaId, $anioId){
        $em = $this->getEntityManager();
        $sql = "SELECT 
                    * 
                FROM con_partidacontable
                WHERE id_empresa = $empresaId AND id_anio = $anioId 
                ORDER BY id DESC 
                LIMIT 1";
        $result = $em->getConnection()->executeQuery($sql)->fetchAll();
        return $result;
    }

    public function ultimaNumeroMensual($empresaId, $anioId, $mesId){
        $em = $this->getEntityManager();
        $sql = "SELECT 
                    * 
                FROM con_partidacontable
                WHERE id_empresa = $empresaId AND id_anio = $anioId AND extract(month from fecha) = '$mesId'
                ORDER BY id DESC 
                LIMIT 1";
        $result = $em->getConnection()->executeQuery($sql)->fetchAll();
        return $result;
    }

    public function ultimaNumeroTipo($empresaId, $anioId, $mesId, $tipoId){
        $em = $this->getEntityManager();
        echo $sql = "SELECT 
                    * 
                FROM con_partidacontable
                WHERE id_empresa = $empresaId AND id_anio = $anioId AND extract(month from fecha) = '$mesId' AND id_tipo_partida = $tipoId
                ORDER BY id DESC 
                LIMIT 1";
        $result = $em->getConnection()->executeQuery($sql)->fetchAll();
        return $result;
    }

    public function ultimaPartida($empresaId){
        $em = $this->getEntityManager();
        $sql = "SELECT 
                    * 
                FROM con_partidacontable
                WHERE id_empresa = $empresaId
                ORDER BY id DESC 
                LIMIT 1";
        $result = $em->getConnection()->executeQuery($sql)->fetchAll();
        return $result;
    }

}
