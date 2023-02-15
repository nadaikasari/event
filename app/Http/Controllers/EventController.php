<?php

namespace App\Http\Controllers;

use App\Helpers\DataHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{
    
    public function getEvent()
    {
        $token = DataHelper::getToken();
        $token = $token->data->access_token;

        $url = "https://skkm.sttbandung.ac.id/api/events/limit=10/offset=0";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get($url);

        if ($response->successful()) {
            $datas = $response->json();
            $response = $datas['data']['data_component']['list_event'];
        } else {
            return "tidak dapat mengambil data";
        }

        return view('event', compact('response'));
    }

    public function showListEvent() {
        $token = DataHelper::getToken();
        $token = $token->data->access_token;

        $url = "https://skkm.sttbandung.ac.id/api/students/skkm/s4SOOyuFmlqEfYnExhs+jQ==";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get($url);

        if ($response->successful()) {
            $datas = $response->json();
            $response = $datas['data']['data_component']['list_event'];  
        } 

        return DataTables::of($response)
            ->addIndexColumn()

            ->addColumn('action', function ($row) {
                // return '<a href="/events/detail/'.$row->event_name_url.'" class=" btn btn-icon btnEdit btn-outline-info mr-1"
                // data-toggle="tooltip" data-placement="top"
                // title="Ubah"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>';
            })
            ->rawColumns(['togleStatus','action'])
            ->make(true);
    }

    public function getDetailEvent($urlDetail)
    {
        $token = DataHelper::getToken();
        $token = $token->data->access_token;

        $url = "https://skkm.sttbandung.ac.id/api/events/$urlDetail";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get($url);

        if ($response->successful()) {
            $datas = $response->json();
            $response = $datas['data']['data_component']['list_event'];
        } else {
            return "tidak dapat mengambil data";
        }

        return view('detail-event', compact('response'));
    }

    public function registerEvent($idEvent, $studentNumber, $studentName)
    {
        $token = DataHelper::getToken();
        $token = $token->data->access_token;

        $url = "https://skkm.sttbandung.ac.id/api/events/regist/";

        $data = [
            'student_number'        => $studentNumber,
            'student_name'          => $studentName,
            'event_id'              => $idEvent
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-Type' => 'application/json',
        ])->timeout(60)->post($url, $data);

        $statusCode = $response->status();
        $body = $response->json();

        if ($response->successful()) {
            return redirect('events')->with('successMessage', $body['message']);
        } else {
            return redirect('events')->with('errorMessage', $body['message']);
        }
    }
}
