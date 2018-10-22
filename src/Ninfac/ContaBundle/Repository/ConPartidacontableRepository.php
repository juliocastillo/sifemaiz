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

    public function ultimaNumeroAnual($empresaId, $anioId) {
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

    public function ultimaNumeroMensual($empresaId, $anioId, $mesId) {
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

    public function ultimaNumeroTipo($empresaId, $anioId, $mesId, $tipoId) {
        $em = $this->getEntityManager();
        $sql = "SELECT 
                    * 
                FROM con_partidacontable
                WHERE id_empresa = $empresaId AND id_anio = $anioId AND extract(month from fecha) = '$mesId' AND id_tipo_partida = $tipoId
                ORDER BY id DESC 
                LIMIT 1";
        $result = $em->getConnection()->executeQuery($sql)->fetchAll();
        return $result;
    }

    public function ultimaPartida($empresaId) {
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

    public function importCatalogo($empresaAbiertoId, $anioAbiertoId, $empresaOrigenId, $anioOrigenId, $nivelCuentaId) {
        $em = $this->getEntityManager();
        $sql = " 
                INSERT INTO mnt_cuentacontable 
                        (id_empresa,
                  id_anio,
                  id_tipo_cuentacontable,
                  id_nivel_cuentacontable,
                  id_cuentacontable_depende,
                  cuenta,
                  nombre,
                  activo,
                  created_by,
                  created_at)
                        SELECT 
                          $empresaAbiertoId AS id_empresa,
                          $anioAbiertoId AS id_anio,
                          id_tipo_cuentacontable,
                          id_nivel_cuentacontable,
                          id_cuentacontable_depende,
                          cuenta,
                          nombre,
                          activo,
                          1,
                          date_trunc('seconds',NOW())
                        FROM mnt_cuentacontable 
                        WHERE id_empresa = $empresaOrigenId AND id_anio = $anioOrigenId AND id_nivel_cuentacontable <= $nivelCuentaId    
                ";
        $result = $em->getConnection()->executeQuery($sql)->fetchAll();
        return $result;
    }

}
