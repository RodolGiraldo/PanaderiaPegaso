<?php

namespace Illuminate\Foundation\Auth;

use DB;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath($correo)
    {

        //Llamar un procedimiento para comparar el correo.
        $users = DB::select("select * from buscarUsuarioEmail('$correo')");

        foreach ($users as $user) {
            if ($user->idTipoUsuario == 1) {
                if (method_exists($this, 'redirectCustomer')) {
                    return $this->redirectCustomer();
                }

                return property_exists($this, 'redirectCustomer') ? $this->redirectCustomer : '/customer';
            } elseif ($user->idTipoUsuario == 2) {
                if (method_exists($this, 'redirectAdmin')) {
                    return $this->redirectAdmin();
                }

                return property_exists($this, 'redirectAdmin') ? $this->redirectAdmin : '/admin';
            } elseif ($user->idTipoUsuario == 3) {
                if (method_exists($this, 'redirectOwner')) {
                    return $this->redirectOwner();
                }

                return property_exists($this, 'redirectOwner') ? $this->redirectOwner : '/owner';
            } elseif ($user->idTipoUsuario == 4) {
                if (method_exists($this, 'redirectDomi')) {
                    return $this->redirectDomi();
                }

                return property_exists($this, 'redirectDomi') ? $this->redirectDomi : '/domiciliary';
            } elseif ($user->idTipoUsuario == 5) {
                if (method_exists($this, 'redirectVendor')) {
                    return $this->redirectVendor();
                }

                return property_exists($this, 'redirectVendor') ? $this->redirectVendor : '/vendor';
            }
        }
    }
    public function redirectPathRe()
    {

        return back();
        // //condicionales para validar tipo usuario
        // if (method_exists($this, 'redirectTo')) {
        //     return $this->redirectTo();
        // }

        // return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }
}
