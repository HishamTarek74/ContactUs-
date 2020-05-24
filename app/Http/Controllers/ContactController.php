<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\ContactRequest;
use  App\Mail\ContactRequestMail;
use Mail;

use App\ContactUs;
use Validator;
class ContactController extends Controller
{
    public function index() {

        return view('contact');
    }

    public function save(Request $request){
      
      
        $validation = Validator::make($request->all(), [
          'name' => 'required',
           'email'  => 'required|email',
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
        
              $data = new ContactUs([
                  'name'    =>  $request->get('name'),
                  'email'     =>  $request->get('email'),
                  'message'     =>  $request->get('message'),
  
              ]);
             $data->save();
             $contacts = array(
                 'name' =>$data->name,
                 'email'=>$data->email,
                 'bodyMessage'=>$data->message
             );
             Mail::send('emails.contact', $contacts, function($message) use ($contacts){
                $message->from($contacts['email']);
                $message->to('hello@devmarketer.io');
                $message->subject('Contact Form For Admin');
            });

            //  $contact = ContactUs::findOrFail($data->id);
              $success_output = '<div class="alert alert-success">You Have Been Send Successfully
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>';
          
  
  
         
      }
      $output = array(
          'error'     =>  $error_array,
          'success'   =>  $success_output
      );
      echo json_encode($output);
  
  
    }


    public function mail($contact) {

        Mail::to('shrbiny20eg@gmail.com')->send(new ContactRequestMail($contact));

    }
}
