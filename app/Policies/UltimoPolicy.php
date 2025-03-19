<?php

namespace App\Policies;

use Illuminate\Support\Facades\Log;
use App\Models\Proyecto;
use App\Models\Ultimo;
use App\Models\Usuario;
use Illuminate\Auth\Access\Response;

class UltimoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Ultimo $ultimo): bool
    {
        //
    }
    public function calificar(Usuario $actual, Proyecto $proyecto): bool
    {
        Log::channel('debug')->info("Entra en la habilidad de calificar, puede $actual->nombre_usuario($actual->usa_id)  , al proyecto $proyecto->id ($proyecto->externo_id)  ");
        Log::channel('debug')->info("tengo $actual->use_type   , $proyecto->asesor_id  y $actual->usa_id  ");

        if ($actual->usa_type == "App\Models\Asesor"  && $proyecto->asesor_id ==  $actual->usa_id ){
            return true;
        }         
        if ($actual->usa_type == "App\Models\Externo" && $proyecto->externo_id == $actual->usa_id ) return true;
        return false; 
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Ultimo $ultimo): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Ultimo $ultimo): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Ultimo $ultimo): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Ultimo $ultimo): bool
    {
        //
    }
}
