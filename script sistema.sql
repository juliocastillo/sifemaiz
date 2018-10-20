truncate con_partidacontable_detalle;
truncate con_partidacontable cascade;
truncate mnt_cuentacontable cascade;
truncate ctl_periodocontable;
truncate ctl_empresa cascade;
truncate ctl_anio cascade;


--REINICIAR SECUENCIA DE LAS TABLAS
ALTER SEQUENCE con_partidacontable_detalle_id_seq RESTART WITH 1;
UPDATE con_partidacontable SET id=nextval('con_partidacontable_detalle_id_seq');