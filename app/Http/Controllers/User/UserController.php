<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Repositories\User\UserRepository;
use App\Http\Requests\User\UserDataImportRequest;
use App\Imports\UsersDataImport;
use App\Imports\UsersImport;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; 

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    
    //home route 
    public function index(){
        $userData =  UserInformation::paginate(20);
        return view('user.user_index')->with(['userData'=>$userData]);
    }

    // import csv data 
    public function importData(Request $request){

        try {
                $request->validate([
                'data_file' =>'required|max:102400|mimetypes:csv,xlsl'
                ]);

            $response =  $this->userRepository->importData($request);
            return redirect()->back()->with($response);

        } catch (\Throwable $th) {
            return redirect()->back()->with(['status'=>0,'message'=>'Data is not imported Successfully.']);

        }
    }
}
