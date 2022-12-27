<?php

namespace App\Http\Controllers;

use http\Message;
use Illuminate\Http\Request;

use App\Models\User;


class Contacts extends Controller
{
    // Porting the user model to store data from a form

    /**
     * @throws \Throwable
     */
    public function getStore(User $user)
    {
        $data = \request()->validate([
            'name' => ['required', 'max:255'],
            'message' => ['required', 'max:255'],
            'email' => [''],
            'fullstack' => [''],
            'design' => [''],
            'logic' => [''],
            'inquire' => [''],
        ]);

        //checkbox section

        //fullstack

        if(\request('fullstack') != []){

             $data['fullstack'] = 'fullstack';

        }else {

            $data['fullstack'] = \request('fullstack');
        }

        //design

        if(\request('design') != []){

            $data['design'] = 'design';

        }else {

             $data['design'] = \request('design');
        }

        //logic

        if(\request('logic') != []){

            $data['logic'] = 'logic';

        }else {

            $data['logic'] =  \request('logic');
        }

        //Inquire

        if(\request('inquire') != []){

            $data['inquire'] = 'inquire';

        }else {

            $data['inquire'] = \request('inquire');
        }

        $chkBox = array($data['fullstack'],$data['inquire'],$data['logic'],$data['design']);

        // Saving data to User table

        $user -> name = $data['name'];
        $user -> message = $data['message'];
        $user -> email = $data['email'];
        $user -> checkbox = json_encode($chkBox);


        if($user -> save()){

            return redirect()->back()->withSent(['Message sent successfully!']);


        }else{

            return redirect()->back()->withFail(['Message not sent']);
        }

    }




}
