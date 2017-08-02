<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\MemberBasic;
use App\MemberBeneficiary;
use App\Savings;
use App\Payment;
use DB;
use Illuminate\Support\Str;


class ApiController extends Controller
{
    //
    public function member_populate($type) {
        $sort_id = 0;

        $sort_name = "Pending";

        if($type == "activated") {
            $sort_id = 3;
            $sort_name = "Activated";
        }
        else if ($type == "on-processed") {
            $sort_id = 2;
            $sort_name = "On-Processed";
        }
        else {
            $sort_id = 1;
            $sort_name = "Pending";
        }

        $members = DB::select("SELECT * FROM member_table WHERE status = {$sort_id};");

        return array(
            "status" => 403,
            "message" => "You are not able to access this.",
            "sort_by" => $sort_name,
            "draw" => 1,
            "recordsTotal" => COUNT($members),
            "recordsFiltered" => COUNT($members),
            "data" => $members,
        );
    }

    public function get_random_number($length = null) {

        $l = 16;
        $random = Str::random();
        if($length != null) {
            $l = (int)$length;
            $random = Str::random($l);
        }

        return array(
            "status" => 200,
            "message" => "Success.",
            "length" => $l,
            "code" => $random,
        );
    }

    public function save_deposit(Request $request) {

        $mid = (int)$request->mid;
        $ref_num = $request->ref_num;
        $amount = $request->amount;
        $desc = $request->desc;
        $interest = $request->interest;

        $savings = new Savings();
        $savings->reference = $ref_num;
        $savings->member_id = $mid;
        $savings->amount = $amount;
        $savings->description = $desc;
        $savings->interest = $interest;
        $savings->type = 1;
        $savings->status = 2;

        if($savings->save()) {
           return array(
               "status" => 200,
               "message" => "Success."
           );
        }

        return array(
            "status" => 500,
            "message" => "Error."
        );
    }

    public function get_transaction($mid) {
        $member_id = (int)$mid;

        $data = DB::select(
            "SELECT * 
            FROM savings_table
            WHERE member_id = {$member_id}"
        );

        if(COUNT($data) > 0) {
            return array(
                "status" => 200,
                "message" => "Success",
                "data" => $data
            );
        }

        return array(
            "status" => 404,
            "message" => "No data",
            "data" => null
        );

    }
}
