<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Exceptions\FileNotUploadedExecption;
use App\View;

class UploadController
{
    public function index(): View
    {
        return View::make('upload/index');
    }

    public function store()
    {
        /*
         * Se debe implementar siempre las validaciones pertinentes para cargar archivos
         */
        if ($_FILES['receipt']['error'] == UPLOAD_ERR_OK) {
            $tmpName = $_FILES['receipt']['tmp_name'];
            $name = basename($_FILES['receipt']['name']);
            $result = move_uploaded_file($tmpName, UPLOAD_PATH . DIRECTORY_SEPARATOR . $name);
        }

        if (!$result)
            throw new FileNotUploadedExecption();

        // Se usa Header para redireccionar bajo code 301
        $CONSTANTS = get_defined_constants();
        header("Location: {$CONSTANTS['BASE_PATH']}/");
        exit;
        // return View::make('upload/stored');
    }
}
