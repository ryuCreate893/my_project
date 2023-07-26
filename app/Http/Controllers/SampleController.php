<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller{
    public function index(Request $request){
        $sampleValue = "sample テキストです。";

        // 追加処理
        // $insertResult = DB::connection('mysql')->insert("insert into users (id, email, name, password) values (1, 'first@php.com', '繋木 一', 'FirstPass')");
        // $insertResult = DB::connection('mysql')->insert("insert into users (id, email, name, password) values (2, 'second@php.com', '弐階 節子', 'sEcondpAss')");
        // $insertResult = DB::connection('mysql')->insert("insert into users (id, email, name, password) values (3, 'third@php.com', '洲 末代', 'THIRDPASS')");
        // ※ IDが重複しているとエラーが出た ※

        // 削除処理
        $deleteResult = DB::connection('mysql')->delete("delete from users where email = 'second@php.com'");
        dd($deleteResult);
        return view("sample/index", ["sampleValue" => $sampleValue]);
    }
}