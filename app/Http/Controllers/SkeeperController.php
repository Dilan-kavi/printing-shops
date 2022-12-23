<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pcenter;
use App\Models\Skeeper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SkeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skeepers = DB::table('users')
        ->join('skeepers', 'users.id', '=', 'skeepers.user_id')
        ->select('users.*', 'skeepers.*');
        
        $skeepers = Skeeper::join('pcenters', 'pcenters.id', '=', 'skeepers.pcenters_id')
                            ->select('pcenters.*', 'skeepers.*')
                            ->paginate(10);
     
        //dd($skeepers);
        // $skeepers = Skeeper::latest()->paginate(5);
        return view('skeepers.index',compact('skeepers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pcenters=Pcenter::get();
        return view('skeepers.create',compact('pcenters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'contact_no'=>'required',
        ]);

        $user = new User;
 
        $user->name = $request->fname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $skeeper = new Skeeper;
        $skeeper->fname = $request->fname;
        $skeeper->lname = $request->lname;
        $skeeper->email = $request->email;
        $skeeper->contact_no = $request->contact_no;
        $skeeper->pcenters_id = $request->pcenters_id;

        $user->skeeper()->save($skeeper);

        $user->assignRole('Shop Keeper');
        // Skeeper::create($request->all());
        return redirect()->route('skeepers.index')
                        ->with('success','Shop keeper created successfully.');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skeeper=Skeeper::find($id);
        return view('skeepers.show',compact('skeeper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $skeeper=Skeeper::find($id);
        return view('skeepers.edit',compact('skeeper'));
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
        request()->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'contact_no'=>'required',
        ]);

        $user = new User;
 
        $user->name = $request->fname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->update();

        $skeeper = new Skeeper;
        $skeeper->fname = $request->fname;
        $skeeper->lname = $request->lname;
        $skeeper->email = $request->email;
        $skeeper->contact_no = $request->contact_no;
        $skeeper->pcenters_id = $request->pcenters_id;

        $user->skeeper()->update($skeeper->toArray());

        // $skeepers->update($request->all());
        return redirect()->route('skeepers.index')
                        ->with('success','Shop keeper updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        
        $user->skeeper()->delete();
        $user->delete();
        // $skeeper->delete();
        return redirect()->route('skeepers.index')
                        ->with('success','Shop keeper deleted successfully');
    }
}
