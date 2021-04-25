<?php

namespace App\Http\Controllers\Profiles;
use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       $data=User::all();
       return view('profile.index')->with('obj',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
        'name'=>'string',
        'email'=>'string|email',
        'password1'=>'string',
        'password2'=>'string',
       ]);

       if($request->password1 ==$request->password2){
           $user=User::create([
             'name'=> $request->name,
             'email'=> $request->email,
             'password'=> bcrypt($request->password1),
           ]);
           $profile=Profile::create(
               [
                'user_1d'=>$user->id
               ]
           );

           return redirect()->route('user.users');
       }else{
        return redirect()->route('user.create')->withErrors(['Password does not match']);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function admin($id,$state){
        $user=User::find($id);
        if($state==0){
            $user->admin=1;
        }else{
            $user->admin=0;
        }
        $user->save();
        return redirect()->route('user.users');
    }//end function admin

}
