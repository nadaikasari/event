<?php

/**
 * Nextcloud Helper.
 *
 * Updated  2022
 *
 */

namespace App\Helpers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Http;

class NextcloudHelper{

    public function __construct()
    {
        $this->helper = "Nextcloud";
    }

    public static function nextcloud_Upload($dataStorage){
        // nextcloud
        Storage::disk('nextcloud')->putFileAs('public'.'/'.$dataStorage['path'].'/'.$dataStorage['username'], $dataStorage['file'], $dataStorage['name']);
    }

    public static function nextcloud_Delete($dataStorage){
        // nextcloud
        Storage::disk('nextcloud')->delete('public'.'/'.$dataStorage['path'].'/'.$dataStorage['name']);
    }

    public static function nextcloud_Show($dataStorage){
        // nextcloud

        Storage::disk('nextcloud')->files('public'.'/'.$dataStorage['file_path'].'/'.$dataStorage['file_name']);
    }
}
