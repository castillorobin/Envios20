<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $permisos = [
            //Permisos para rol
            'recursos-ver',
            'recursos-editar',
            'recursos-crear',
            'financiera-ver',
            'financiera-editar',
            'financiera-crear',
            'factura-ver',
            'factura-editar',
            'factura-crear',
            'ordenes-ver',
            'ordenes-editar',
            'ordenes-crear',
            'comercios-ver',
            'comercios-editar',
            'comercios-crear',
            'stock-ver',
            'stock-editar',
            'stock-crear',
            'configurar-ver',
            'configurar-editar',
            'configurar-crear',
            
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
