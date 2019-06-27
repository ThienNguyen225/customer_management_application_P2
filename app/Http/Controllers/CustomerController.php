<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = [
            1 => [
                'id' => 1,
                'name' => 'Nguyễn Văn Anh',
                'phone' => '0359922103',
                'email' => 'nguyenvananh@gmail.com'
            ],
            2 => [
                'id' => 2,
                'name' => 'Nguyễn Văn Toán',
                'phone' => '0359922103',
                'email' => 'nguyenvananh@gmail.com'
            ],
            3 => [
                'id' => 3,
                'name' => 'Nguyễn Văn Tính',
                'phone' => '0359922103',
                'email' => 'nguyenvananh@gmail.com'
            ],
            4 => [
                'id' => 4,
                'name' => 'Nguyễn Văn Tèo',
                'phone' => '0359922103',
                'email' => 'nguyenvananh@gmail.com'
            ],
            5 => [
                'id' => 5,
                'name' => 'Nguyễn Văn Đông',
                'phone' => '0359922103',
                'email' => 'nguyenvananh@gmail.com'
            ],
            6 => [
                'id' => 6,
                'name' => 'Nguyễn Văn Thịnh',
                'phone' => '0359922103',
                'email' => 'nguyenvananh@gmail.com'
            ],
            7 => [
                'id' => 7,
                'name' => 'Nguyễn Văn Chính',
                'phone' => '0359922103',
                'email' => 'nguyenvananh@gmail.com'
            ],
            8 => [
                'id' => 8,
                'name' => 'Nguyễn Văn Phương',
                'phone' => '0359922103',
                'email' => 'nguyenvananh@gmail.com'
            ],
            9 => [
                'id' => 9,
                'name' => 'Nguyễn Văn Thức',
                'phone' => '0359922103',
                'email' => 'nguyenvananh@gmail.com'
            ]
        ];
        return view('list', compact('customers'));
    }
}
