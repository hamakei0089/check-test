<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){

        return view('index');

    }

    public function confirm(ContactRequest $request){

     $gender = [
        '男性' => 0,
        '女性' => 1,
        'その他' => 2,
        ];
    $contact = [
    'last_name' => $request->last_name,
    'first_name' => $request->first_name,
    'gender' => $request->gender,
    'email' => $request->email,
    'tel1' => $request->tel1,
    'tel2' => $request->tel2,
    'tel3' => $request->tel3,
    'address' => $request->address,
    'building' => $request->building,
    'category_id' => $request->category_id,
    'detail' => $request->detail,
        ];

        return view('confirm' , compact('contact'));

    }
    public function store(ContactRequest $request){
    
    $gender = [
        '男性' => 0,
        '女性' => 1,
        'その他' => 2,
        ];
    $category_id = [
        '1.商品のお届けについて' => 1,
        '2.商品のお届けについて' => 2,
        '3.商品トラブル' => 3,
        '4.ショップへのお問い合わせ' => 4,
        '5.その他' => 5,
        ];
    $contact = [
    'last_name' => $request->last_name,
    'first_name' => $request->first_name,
    'gender' => $gender[$request->gender],
    'email' => $request->email,
    'tel1' => $request->tel1,
    'tel2' => $request->tel2,
    'tel3' => $request->tel3,
    'address' => $request->address,
    'building' => $request->building,
    'category_id' => $category_id[$request->category_id],
    'detail' => $request->detail,
        ];
        Contact::create($contact);
        return view('thanks',);
    }
}

