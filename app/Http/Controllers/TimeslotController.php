<?php

namespace App\Http\Controllers;

use App\Models\Pcenter;
use App\Models\Timeslot;
use Illuminate\Http\Request;

class TimeslotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tslots = Timeslot::join('pcenters', 'pcenters.id', '=', 'timeslots.pcenters_id')
                            ->select('pcenters.*', 'timeslots.*')
                            ->paginate(10);

        // $tslots = Timeslot::latest()->paginate(5);
        return view('timeslots.index',compact('tslots'))
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
        return view('timeslots.create',compact('pcenters'));
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
            'stime'=>'required',
            'etime'=>'required',
        ]);

        Timeslot::create($request->all());
        return redirect()->route('timeslots.index')
                        ->with('success','Time slot created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Timeslot $tslots)
    {
        
        return view('timeslots.show',compact('tslots'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Timeslot $tslots)
    {
        // $tslots=Timeslot::find($id);
        return view('timeslots.edit',compact('tslots'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timeslot $tslots)
    {
        request()->validate([
            'stime'=>'required',
            'etime'=>'required',
        ]);

        $tslots->update($request->all());
        return redirect()->route('timeslots.index')
                        ->with('success','Time slot updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timeslot $tslot)
    {
        $tslot->delete();

        return redirect()->route('timeslots.index')
                        ->with('success','Time slot deleted successfully');
    }

    public function avalible($id){
       
        $tslots = Timeslot::join('pcenters', 'pcenters.id', '=', 'timeslots.pcenters_id')
        ->where('timeslots.pcenters_id', '=', $id)
        ->where('status',0)
        ->select('pcenters.*', 'timeslots.*')
        ->get();
       // $foodArray = json_decode(json_encode( $tslots->stime), true);
       $time=[];
       for($x = 0; $x <= 7; $x++){
        foreach($tslots as $tslot){
            $time[$x][] = $tslot->stime;
           }
       }
       
      // $time = json_decode(json_encode( $time), true);
        //dd($time);
        return view('timing',compact('time','id'));
    }
}
