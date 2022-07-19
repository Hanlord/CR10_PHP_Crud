<?php
function file_upload($image)
{
    $result = new stdClass();
    $result->fileName = 'default.jpg';
    $result->error = 1;
    $fileName = $image["name"];
    $fileTmpName = $image["tmp_name"];
    $fileError = $image["error"];
    $fileSize = $image["size"];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $filesAllowed = ["png", "jpg", "jpeg"];
    if ($fileError == 4) {
        $result->ErrorMessage = "No image was chosen";
        return $result;
    } else {
        if (in_array($fileExtension, $filesAllowed)) {
            if ($fileError === 0) {
                if ($fileSize < 5000000) {
                    $fileNewName = uniqid('') . "." . $fileExtension;
                    $destination = "../image/$fileNewName";
                    if (move_uploaded_file($fileTmpName, $destination)) {
                        $result->error = 0;
                        $result->fileName = $fileNewName;
                        return $result;
                    } else {
                        $result->ErrorMessage = "There was an error uploading this image.";
                        return $result;
                    }
                } else {
                    $result->ErrorMessage = "This image is bigger than the allowed";
                    return $result;
                }
            } else {
                $result->ErrorMessage = "There was an error uploading - $fileError";
                return $result;
            }
        } else {
            $result->ErrorMessage = "This file type can't be uploaded.";
            return $result;
        }
    }
}
