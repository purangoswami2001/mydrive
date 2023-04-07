<?php

namespace App\Http\Controllers;
use App\Models\File;


use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $filename= pathinfo($request->file('file')->getClientOriginalName(),PATHINFO_FILENAME);
        $filepath= time()."". $request->file('file')->getClientOriginalName();
        $request->file('file')->move(public_path('\files'), $filepath);

                    $file1 = new File;  
                    $file1->file_name = $filename;
                    $file1->file_path = $filepath;
                    $file1->dir_id = $request['Dir_Id'];
                    $file1->user_id = Session()->get('loginId');
                   $file1->save();
                   if($request['Dir_Id'] == "0")
                   return  redirect('/directory'); 
               else 
                   return  redirect('/directory/getDir/'.$request['Dir_Id']); 
                }



}
