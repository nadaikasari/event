<?php

namespace App\Http\Controllers;

use App\Helpers\DataHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\Facades\DataTables;

class SkkmController extends Controller
{
    
    public function getViewSkkm()
    {
        $token = DataHelper::getToken();
        $token = $token->data->access_token;

        $url = "https://skkm.sttbandung.ac.id/api/students/skkm/s4SOOyuFmlqEfYnExhs+jQ==";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get($url);

        if ($response->successful()) {
            $datas = $response->json();
            $response = $datas['data']['data_component'];

        } else {
            return "tidak dapat mengambil data";
        }

        return view('skkm', compact('response'));
    }

    public function showListEvent()
    {
        $token = DataHelper::getToken();
        $token = $token->data->access_token;

        $url = "https://skkm.sttbandung.ac.id/api/students/skkm/s4SOOyuFmlqEfYnExhs+jQ==";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get($url);

        if ($response->successful()) {
            $datas = $response->json();
            $response = $datas['data']['data_component']['list_event'];
            
        } else {
            return "tidak dapat mengambil data";
        }

        return DataTables::of($response)
            ->addIndexColumn()

            ->addColumn('action', function ($row) {
                return '<a href="/events/detail/'.$row['event_name_url'].'" class=" btn btn-icon btnEdit btn-outline-info mr-1"
                data-toggle="tooltip" data-placement="top"
                title="Detail">Detail</a>';
                // return $row['event_name_url;
            })
            ->rawColumns(['togleStatus','action'])
            ->make(true);
    }

    public function scanQR($idEvent)
    {
        $token = DataHelper::getToken();
        $token = $token->data->access_token;

        $url = "https://skkm.sttbandung.ac.id/api/events/update/participant";

        $data = [
            'student_number'        => "s4SOOyuFmlqEfYnExhs+jQ==",
            'event_id'              => $idEvent
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json',
        ])->timeout(60)->post($url, $data);

        $bodyResponse = $response->json();

        return view('page-after-scan', compact('bodyResponse'));
    }

}
