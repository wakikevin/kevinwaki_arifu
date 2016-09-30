<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//get the subject model
use App\Subject;

class SubjectController extends Controller
{
    //this displays all subjects by default
    public function index(Request $request)
    {
    	//retrieve all subjects from the model
        $subjects = Subject::paginate(5);
        return response(array(
                'error' => false,
                'subjects' =>$subjects->toArray(),
               ),200);       
    }

    //save the data from the api call to the DB
    public function store(Request $request)
    {
        Subject::create($request->all());
        return response(array(
                'error' => false,
                'message' =>'Subject created successfully',
               ),200);
    }

    //display one record
    public function show($id)
    {
        $subject = Subject::find($id);
        return response(array(
                'error' => false,
                'subject' =>$subject,
               ),200);
    } 
}
