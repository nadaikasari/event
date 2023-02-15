<?php

namespace App\Http\Controllers;

use App\Helpers\DataHelper;
use Illuminate\Support\Facades\Http;

class RegistrationController extends Controller
{
    
    public function validationData()
    {
        $token = DataHelper::getToken();
        $token = $token->data->access_token;

        $url = "https://skkm.sttbandung.ac.id/api/students/check_skkm/s4SOOyuFmlqEfYnExhs+jQ==";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get($url);

        if ($response->successful()) {
            $datas = $response->json();
            $response = $datas['meta']['message'];
            if($response == "Mahasiswa dapat mendaftar") {
                return view('registration', compact('response'));
            } else {
                return view('registration-banned', compact('response'));
            }
        } else {
            return "tidak dapat mengambil data";
        }
    }
}
