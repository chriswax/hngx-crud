<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class slackAPI extends Controller
{
    function getData($slackname, $track){

        //set time zone
        date_default_timezone_set("Africa/Lagos");
        $utc = gmdate("Y-m-d\TH:i:s\Z");
        $data = [
            "slack_name" =>$slackname,
            "current_day" =>date('l'),
            "utc_time" =>$utc,
            "track" =>$track,
            "github_file_url" =>"https://github.com/chriswax",
            "github_repo_url" =>"https://github.com/chriswax",
            "status_code" =>200
        ];

        return $data;
    }

   
}
