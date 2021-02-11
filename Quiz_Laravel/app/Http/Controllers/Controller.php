<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Str;

use DB;
use Session;
use View;
use Hash;
use Auth;
use Excel;
use Mail;
use function Composer\Autoload\includeFile;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    
    public function add_quiz_new_back(Request $req)
    {
        
        //echo"hello";
        $q_name = $req->input('q_name');
        $participants = $req->input('participants');
        $time = $req->input('time');
        
        $data1 = array(
            'q_name'=>$q_name,
            'participants'=>implode("|", $participants),
            'time'=>$time,
        );
        DB::table('quiz_list')->insert($data1);
        
        return Redirect::to('quiz_question_awnser')->withMessage('Quiz Submitted successfully');
        
    }
    
    public function add_quiz_qa_back(Request $req)
    {
        
        //echo"hello";
        $q_id = $req->input('q_name');
        $question = $req->input('question');
        $option1 = $req->input('option1');
        $option2 = $req->input('option2');
        $option3 = $req->input('option3');
        $option4 = $req->input('option4');
        $actual_awnser = $req->input('actual_awnser');
        
        $data1 = array(
            'quiz_id'=>$q_id,
            'question'=>$question,
            'option1'=>$option1,
            'option2'=>$option2,
            'option3'=>$option3,
            'option4'=>$option4,
            'actual_awnser'=>$actual_awnser,
        );
        DB::table('quiz_q_a')->insert($data1);
        
        return Redirect::to('quiz_question_awnser')->withMessage('Question AND Awnser Submitted successfully');
        
    }
    
    
    public function add_quiz_new_user_back(Request $req)
    {
        
        //echo"hello";
        $roll_no = $req->input('roll_no');
        $quiz_id = $req->input('quiz_id');
        
        $question_no = $req->input('question_no');
        $question_title = $req->input('question_title');
        $actual_aws = $req->input('actual_aws');
        $user_answer1 = $req->input('user_answer1');
        
        $data1 = array(
            'roll_no'=>$roll_no,
            'question_no'=>$question_no,
            'question_title'=>$question_title,
            'actual_aws'=>$actual_aws,
            'user_aws'=>$user_answer1,
            'quiz_no'=>$quiz_id,
        );
        DB::table('user_ans')->insert($data1);
        
        return Redirect::to('UDashboard')->withMessage('Previous Question AND Awnser Submitted successfully');
        
    }
    
    
    
    
    
    
}
