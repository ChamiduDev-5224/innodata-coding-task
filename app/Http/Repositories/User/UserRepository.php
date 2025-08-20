<?php

namespace App\Http\Repositories\User;

use App\Jobs\userDataImport;

class UserRepository{

    public function importData($request){
            $file =$request->file('data_file');
            userDataImport::dispatch($file);
            return ['status'=>1,'message'=>'Data imported Successfully.'];
        
    }


}