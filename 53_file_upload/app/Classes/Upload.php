<?php

declare(strict_types=1);

namespace App\Classes;

class Upload
{
    public function index(): string
    {
        $view =  'Uploads' . PHP_EOL;

        $CONSTANTS = get_defined_constants();

        $view =  <<<FORM
        <form action="{$CONSTANTS['BASE_PATH']}/upload" method="post" enctype="multipart/form-data">
            <label for="receipt">Upload your receipt</label>
            <input type="file" name="receipt" id="receipt" />
            <button type="submit">Upload</button>
        </form>
        FORM;

        return $view;
    }

    public function store()
    {
        print_r($_FILES);

        /*
         * Se debe implementar siempre las validaciones pertinentes para cargar archivos
         */
        if ($_FILES['receipt']['error'] == UPLOAD_ERR_OK) {
            $tmpName = $_FILES['receipt']['tmp_name'];
            $name = basename($_FILES['receipt']['name']);
            move_uploaded_file($tmpName, UPLOAD_PATH . DIRECTORY_SEPARATOR . $name);
        }

        return 'File Uploaded';
    }
}
