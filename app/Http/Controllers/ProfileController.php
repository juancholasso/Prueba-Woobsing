<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function list(){
        try{
            $profiles = Profile::all();
            return response()->json($profiles);
            
        }
        catch(Exception $e){
            echo $e;
        }
    }

    public function get($id){
        try{
            $profile = Profile::find($id);
            return response()->json($profile);
            
        }
        catch(Exception $e){
            echo $e;
        }
    }

    public function delete($id){
        try{
            $profile = Profile::find($id);
            $profile->delete();
            return response()->json($profile);
            
        }
        catch(Exception $e){
            echo $e;
        }
    }

    public function create(Request $request){
        try{
            $profile = new Profile;
            $profile->name = $request->input('name');
            $profile->lastname = $request->input('lastname');
            $profile->tel = $request->input('tel');
            $profile->email = $request->input('email');
            $profile->address = $request->input('address');
            $profile->timestamps = false;
            if($profile->save()){
                return response()->json($profile);
            }
            else{
                return response()->json($profile);
            }
        }
        catch(Exception $e){
            echo $e;
        }
    }

    public function update($id, Request $request){
        try{
            $profile = Profile::find($id);

            $profile->name = $request->input('name');
            $profile->lastname = $request->input('lastname');
            $profile->tel = $request->input('tel');
            $profile->email = $request->input('email');
            $profile->address = $request->input('address');
            $profile->timestamps = false;

            if($profile->save()){
                return response()->json($profile);
            }
            else{
                return response()->json($profile);
            }
        }
        catch(Exception $e){
            echo $e;
        }
    }
}