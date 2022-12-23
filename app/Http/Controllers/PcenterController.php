<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pcenter;

class PcenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcenters = Pcenter::latest()->paginate(5);
        return view('pcenters.index',compact('pcenters'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pcenters.create');
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
            'cname'=>'required',
            'clocation'=>'required',
        ]);   

        Pcenter::create($request->all());
        return redirect()->route('pcenters.index')
                        ->with('success','Center created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pcenter $pcenter)
    {
        return view('pcenters.show',compact('pcenter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pcenter $pcenter)
    {
        return view('pcenters.edit',compact('pcenter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pcenter $pcenter)
    {
        request()->validate([
            'cname'=>'required',
            'clocation'=>'required',
        ]);

        $pcenter->update($request->all());
        return redirect()->route('pcenters.index')
                        ->with('success','Center updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pcenter $pcenter)
    {
        $pcenter->delete();
        return redirect()->route('pcenters.index')
                        ->with('success','Center deleted successfully');
    }
}
