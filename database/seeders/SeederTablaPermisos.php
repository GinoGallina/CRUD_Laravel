<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos =[
            //tabla roles
            'ver-rol',
            'crear-rol',
            'borrar-rol',
            'editar-rol',
            
            //tabla blogs
            'ver-blog',
            'crear-blog',
            'borrar-blog',
            'editar-blog',
        ];

        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
