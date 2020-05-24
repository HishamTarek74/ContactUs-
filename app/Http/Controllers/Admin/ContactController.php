<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactUs;
use  Yajra\Datatables\Datatables;
use Validator;

class ContactController extends Controller
{
    function index()
    {
     return view('admin.contactus');
     //http://127.0.0:8000/ajaxdata
    }
 function getdata()
    {
     $AllData = ContactUs::select('id', 'name','email','message', 'created_at')->orderBy('updated_at', 'desc')->get();
     return Datatables::of($AllData)
     ->addColumn('action', function($AllData){
                return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$AllData->id.'">
                <i class="fa fa-edit fa-2x" ></i> </a> 
                
                <a href="#" class="btn btn-xs btn-danger deleteModal "   data-toggle="modal" data-target="#confirm-delete" id="'.$AllData->id.'">
                <i class="fa fa-times fa-2x"></i> </a>';
            })
     ->make(true);
    }

    function postdata(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message'  => 'required',

        ]);


        // Validation Of Data 
        $error_array = array();
        $success_output = '';

        // If Fail 
        if ($validation->fails())
        {
            foreach($validation->messages()->getMessages() as $field_name => $messages)
            {
                $error_array[] = $messages;
            }
        }

        // If Succsess
        else
        {
            // Insert Data 
            if($request->get('button_action') == "insert")
            {
                $data = new ContactUs([
                    'name'     =>  $request->get('name'),
                    'email'     =>  $request->get('email'),
                    'message'     =>  $request->get('message'),

                ]);
                $data->save();
                $success_output = '<div class="alert alert-success">Data Inserted</div>';
            }


            // Update Data By student_id
            if($request->get('button_action') == 'update')
            {
                $data = ContactUs::find($request->get('student_id'));
                $data->name = $request->get('name');
                $data->email = $request->get('email');
                $data->message = $request->get('message');
                $data->save();
                $success_output = '<div class="alert alert-success">Data Updated
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }

        }
        $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }

    // Fetch Data has been Updated  With id
     function fetchdata(Request $request)
    {
        $id = $request->input('id');
        $data = ContactUs::find($id);
      
        $output = array(
            'name'    =>  $data->name,
            'email'    =>  $data->email,
            'message'    =>  $data->message,  

        );
        echo json_encode($output);
    }

    // Remove Date 
    function removedata(Request $request)
    {
        $data = ContactUs::find($request->input('id'));
        if($data->delete())
        {
            echo '<div class="alert alert-success">Data Deleted 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>';
        }
    }
}
