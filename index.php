<?php

function uploadFile($field_name, $destination) {
        if (!is_null(Input::file($field_name))) {
            $file = Input::file($field_name)->getClientOriginalName();

            $input[$field_name] = $file;

            $file1 = Input::file($field_name);

            $uploadSuccess = $file1->move($destination, $file);
            return $file;
        } else {
            return false;
        }
    }

?>
