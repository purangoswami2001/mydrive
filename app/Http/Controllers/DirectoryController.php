<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directory;
use App\Models\File;


class DirectoryController extends Controller
{
    public function  new_dir($id = 0)
        {
            $data = [
                "Dir_Id" => $id
            ];
            return view('directory.new_dir',compact('data'));
        }

    

        public function  upload_file($id = 0)
        {
            $data = [
                "Dir_Id" => $id
            ];
            return view('directory.upload_file',compact('data'));
        }   
       
        public function create_folder(Request $request)
        { 
        
            $request->validate(
                [
                   
                    'dir_name'=>'required',
                 ]
                 );
                 $data= Directory::where("user_id","=",Session()->get('loginId'))->where("dir_name","=",$request['dir_name'])->selectRaw('count(id) as cnt')->pluck('cnt');
                 if(!$data[0] > 0){
                    $dir = new Directory;  
                    $dir->dir_name = $request['dir_name'];
                    $dir->parent_id = $request['Dir_Id'];
                    $dir->dir_size = 0;
                    $dir->user_id = Session()->get('loginId');
                    $dir->save();
                    if($request['Dir_Id'] == "0")
                        return  redirect('/directory'); 
                    else 
                        return  redirect('/directory/getDir/'.$request['Dir_Id']); 
                 }else{
                    return back()->with('fail','Folder is already exixts!');
                 }    
                }




        public function showdir()
        {   
            $data = $this->getData(0);
            return  view('directory.folder',compact('data'));

        }

        public function getFolder($id = 0)
        {
            return Directory::where("user_id","=",Session()->get('loginId'))->where("parent_id","=",$id)->get();
        }
        public function getFiles($id)
        {
            return File::where("user_id","=",Session()->get('loginId'))->where("dir_id","=",$id)->get();
        }

        public function getData($id = 0)
        {
            return  [
                "Folder" => $this->getFolder($id),
                "Files" => $this->getFiles($id),
                "Dir_Id" => $id
            ];
        }
    

        public function opendir($id){
            $data = $this->getData($id);
            return  view('directory.folder',compact('data'));

        }

       
}
