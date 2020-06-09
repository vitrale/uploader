<?php

namespace App\Controllers;

class UploaderController extends BaseController
{

    public function page()
    {
        return view('uploader/main.php');
    }

    public function upload()
    {
        $request = $this->request;

        $files = $request->getFiles();

        $uploadedFile = $files["fileToUpload"];

        $ext = $uploadedFile->getExtension();

        $uploadedFile->move(self::UPLOADER_PATH, "new_filename.$ext");

        $response = $this->response;

        return $response->redirect(route_to('uploaderForm'));
    }

    const UPLOADER_PATH = "C:\\tmp\\";
}