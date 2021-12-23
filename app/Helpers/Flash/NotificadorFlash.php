<?php

namespace App\Helpers\Flash;


use Illuminate\Session\Store;

class NotificadorFlash{

    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function message($message, $level = 'informacion')
    {
        $this->session->flash('notificacion_flash.message', $message);
        $this->session->flash('notificacion_flash.level', $level);
    }

    public function permanente($message, $level = 'informacion')
    {
        $this->session->flash('notificacion_flash_permanente.message', $message);
        $this->session->flash('notificacion_flash_permanente.level', $level);
    }

    public function minimized($message, $level = 'informacion')
    {
        $this->session->flash('notificacion_flash_minimized.message', $message);
        $this->session->flash('notificacion_flash_minimized.level', $level);
    }

    public function informacion($message)
    {
        $this->message($message, 'informacion');
    }

    public function exito($message)
    {
        $this->message($message, 'exito');
    }

    public function error($message)
    {
        $this->message($message, 'error');
    }

    public function advertencia($message)
    {
        $this->message($message, 'advertencia');
    }

    public function increible_exito($message)
    {
        $this->message($message, 'increible exito');
    }

    public function permanente_error($message)
    {
        $this->permanente($message, 'error');
    }

    public function permanente_advertencia($message)
    {
        $this->permanente($message, 'advertencia');
    }

    public function permanente_exito($message)
    {
        $this->permanente($message, 'exito');
    }

    public function permanente_informacion($message)
    {
        $this->permanente($message, 'informacion');
    }

    public function minimized_error($message)
    {
        $this->minimized($message, 'error');
    }

    public function minimized_advertencia($message)
    {
        $this->minimized($message, 'advertencia');
    }

    public function minimized_exito($message)
    {
        $this->minimized($message, 'exito');
    }

    public function minimized_informacion($message)
    {
        $this->minimized($message, 'informacion');
    }

}
