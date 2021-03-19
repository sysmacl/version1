<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdenTrabajoTerreno extends Model
{
    protected $table = 'orden_trabajo_terreno';

    protected $fillable = [
        'num_cliente_obra',
        'num_ott',
        'nombre_cliente',
        'nombre_obra',
        'fono_obra',
        'direccion_obra',
        'encargado_obra',
        'muestreo_de',
        'extraccion',
        'compactacion',
        'tipo_molde_uno',
        'tipo_molde_dos',
        'tipo_molde_tres',
        'tipo_molde_cuatro',
        'tipo_molde_cinco',
        'tipo_molde_seis',
        'tipo_molde_siete',
        'muestreado_por',
        'ensayado_por',
        'tipo_muestra',
        'amasada_hormigon',
        'asentamiento_cono',
        'num_informe',
        'segregacion',
        'num_equipo_cono_abrams',
        'num_vibrador_inmersion',
        'num_equipo_cono_reducido',
        'num_ingreso',
        'hora_muestreo',
        'hora_inicio_amasado',
        't_ambiente',
        't_hormigon_mortero',
        'proveedor',
        'num_guia_despacho',
        'nombre_chofer',
        'curado_inicial',
        'elemento_hormigonado',
        'ubicacion_elemento',
        'tipo_hormigon_mortero',
        'resistencia_especificada',
        'fecha_confeccion',
        'aditivo',
        'num_mixer',
        'traslado_probetas',
        'retiro_muestra_otros',
        'retiro_muestra_cantidad_un_dia',
        'retiro_muestra_cantidad_tres_dias',
        'retiro_muestra_cantidad_siete_dias',
        'retiro_muestra_cantidad_catorce_dias',
        'retiro_muestra_cantidad_veintiocho_dias',
        'retiro_muestra_cantidad_otros',
        'retiro_muestra_fecha_un_dia',
        'retiro_muestra_fecha_tres_dias',
        'retiro_muestra_fecha_siete_dias',
        'retiro_muestra_fecha_catorce_dias',
        'retiro_muestra_fecha_veintiocho_dias',
        'retiro_muestra_fecha_otros',
        'retiro_muestra_informe_un_dia',
        'retiro_muestra_informe_tres_dias',
        'retiro_muestra_informe_siete_dias',
        'retiro_muestra_informe_catorce_dias',
        'retiro_muestra_informe_veintiocho_dias',
        'retiro_muestra_informe_otros',
        'procedimiento_extraccion',
        'muestra_ingresada_por_cliente',
        'fecha_ingreso',
        'fecha_visita_obra',
        'hora_llegada',
        'hora_salida',
        'responsable_en_obra',
        'dens_aparente_hormigon',
        'dens_aparente_mortero',
        'indice_esclerometrico',
        'irregularidad_superficial',
        'irregularidad_superficial_ml',
        'observaciones',
        'alteracion_muestra',
        'observaciones_alteraciones_muestra',
        'laboratorista',
        'ayudante',
        'recibe_o_muestrea',
        'aridos_hormigon_muestra_uno',
        'aridos_hormigon_muestra_dos',
        'aridos_hormigon_muestra_tres',
        'aridos_hormigon_muestra_cuatro',
        'seccion_testigos_habilitada',
        'seccion_aridos_habilitada',
        'seccion_otros_habilitada',
        'seccion_retiro_muestras_habilitada',
        'testigos_extraidos_seis',
        'testigos_extraidos_cuatro',
        'testigos_extraidos_total',
        'testigos_ensayados_seis',
        'testigos_ensayados_cuatro',
        'testigos_ensayados_total',
    ];
}
