<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    private $contacts;

    public function __construct()
    {
        $this->contacts = [
            [
                'id' => 1,
                'name' => 'El Farel Raja Iblis',
                'phone' => '081216519331',
                'address' => 'Jl. Sudirman No. 123, Jakarta',
                'email' => 'farelmaestro0@gmail.com',
                'avatar' => Storage::url('asset/farel.jpeg'),
            ],
            [
                'id' => 2,
                'name' => 'Ndoro Kanjeng Kiarra Ratu Iblis',
                'phone' => '081333111675',
                'address' => 'Jl. Thamrin No. 456, Jakarta',
                'email' => 'kiarraputrimulya@gmail.com',
                'avatar' => Storage::url('asset/kiarra-cantik.jpeg'),
            ],
            [
                'id' => 3,
                'name' => 'Ayanokouji',
                'phone' => '081219281651',
                'address' => 'Jl. Thamrin No. 456, Jakarta',
                'email' => 'ayano@yahoo.co.id',
                'avatar' => Storage::url('asset/ayano.jpeg'),
            ],
            [
                'id' => 4,
                'name' => 'Kei Karuizawa',
                'phone' => '082278789898',
                'address' => 'Jl. Thamrin No. 456, Jakarta',
                'email' => 'karuizawa@mail.com',
                'avatar' => Storage::url('asset/kei.jpeg'),
            ],
            [
                'id' => 5,
                'name' => 'El gasing dingin tetapi tidak mematikan',
                'phone' => '081465439098',
                'address' => 'Jl. Thamrin No. 456, Jakarta',
                'email' => 'mutermuter@gmail.com',
                'avatar' => Storage::url('asset/el-gasing.jpeg'),
            ],
        ];
    }

    public function index()
    {
        return view('admin.dashboard.index', ['contacts' => $this->contacts]);
    }
}
