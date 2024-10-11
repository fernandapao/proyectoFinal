<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;


class serviciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
            [
                'suscripcion_id' => 1,
                'nombre' => 'Suscripción Individual',
                'imagen' => 'img/suscripciones/individual.jpg',
                'tarifa_acceso' => 1500,
                'descripcion' => 'Acceso a la app sin publicidad y disfrute de descuentos exclusivos en servicios adicionales. Ideal para viajeros frecuentes.',
                'condiciones' => 'La suscripción se renueva automáticamente cada mes. Acceso a descuentos limitados a una persona por cuenta.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            [
                'suscripcion_id' => 2,
                'nombre' => 'Suscripción Familiar/Amigos',
                'imagen' => 'img/suscripciones/amigos.jpg',
                'tarifa_acceso' => 4000,
                'descripcion' => 'Hasta 5 personas pueden disfrutar de la app sin publicidad y beneficiarse de descuentos especiales en todos los servicios.',
                'condiciones' => 'La suscripción se renueva automáticamente cada mes. Todos los miembros registrados deben usar la misma cuenta.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            [
                'suscripcion_id' => 3,
                'nombre' => 'Suscripción Premium Plus',
                'imagen' => 'img/suscripciones/premium.jpg',
                'tarifa_acceso' => 2500,
                'descripcion' => 'Incluye acceso a la app sin publicidad, descuentos exclusivos y beneficios adicionales como upgrades en salas VIP y atención prioritaria.',
                'condiciones' => 'La suscripción incluye upgrades disponibles solo en aeropuertos seleccionados. Descuentos especiales solo para el suscriptor principal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
