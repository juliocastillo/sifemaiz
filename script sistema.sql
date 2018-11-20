truncate con_partidacontable_detalle;
truncate con_partidacontable cascade;
truncate mnt_cuentacontable cascade;
truncate ctl_periodocontable;
truncate ctl_empresa cascade;
truncate ctl_anio cascade;


--REINICIAR SECUENCIA DE LAS TABLAS
ALTER SEQUENCE con_partidacontable_detalle_id_seq RESTART WITH 1;
UPDATE con_partidacontable SET id=nextval('con_partidacontable_detalle_id_seq');


ALTER SEQUENCE mnt_precio_producto_id_seq RESTART WITH 1;
UPDATE mnt_precio_producto SET id=nextval('mnt_precio_producto_id_seq');


ALTER TABLE mnt_producto ADD COLUMN precio_publico numeric(10, 4) NOT NULL;


--MAPEAR UNA SOLA ENTIDAD

    php app/console doctrine:mapping:convert xml ./src/Minsal/CatalogosBundle/Resources/config/doctrine/metadata/orm  --from-database --filter="DetalleDependenciaEstablecimiento" --force
    php app/console doctrine:mapping:import MinsalCatalogosBundle annotation --filter="DetalleDependenciaEstablecimiento"
    php app/console doctrine:generate:entities MinsalCatalogosBundle:DetalleDependenciaEstablecimiento