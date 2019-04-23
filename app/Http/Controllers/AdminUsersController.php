<?php

namespace App\Http\Controllers;

use
Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Role;
use App\Http\Requests\UsersRequest;
use App\Photo;
use Illuminate\Support\Facades\Session;
class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::lists('name', 'id')->all();

        Session::flash('deleted_user', 'The user has been created successfully');

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //
   /*     return $request->all();*/

/*   User::create($request->all());
   return redirect('/admin/users');*/

    if(trim($request->password) == ''){

        $input = $request->except('password');
    }else{

        $input = $request->all();

        $input['password'] = bcrypt($request->password);

    }


    if($file = $request->file('photo_id')){

       $name = time(). $file->getClientOriginalName();

       $file->move('images', $name);

       $photo = Photo::create(['file'=>$name]);

       $input['photo_id'] =  $photo->id;

    }

    User::create($input);

    return redirect('/admin/users');

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
        return view('admin.users.show');
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
        $user = User::findOrFail($id);

        $roles = Role::lists('name', 'id')->all();


        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UsersUpdateRequest $request, $id)
    {
        //


        $user = User::findOrFail($id);

        if(trim($request->password) == ''){

            $input = $request->except('password');
        }else{

            $input = $request->all();

            $input['password'] = bcrypt($request->password);

        }


        if($file = $request->file('photo_id')){

            $name =time() .$file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;

        }

        $user->update($input);

        Session::flash('deleted_user', 'The user profile has been updated successfully');

        return redirect('/admin/users');
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
        $user = User::findOrFail($id);

        unlink(public_path() . "" . $user->photo->file);

        $user->delete();

        Session::flash('deleted_user', 'The user has been deleted successfully');



        return redirect('/admin/users');

    }
}
