<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Plots;

class PlotsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $plots  =  \App\Plots::all();
          return view("plots.index",compact("plots"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("plots.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //upload image

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('assets/plot_images'), $imageName);

       $plot  =  \App\Plots::create([

            'plot' => $request->plot, 
            'size' => $request->size, 
            
            
            'address' => $request->address,
            'contact_no' => $request->contact_no,
            'remarks' => $request->remarks,
            'status' => $request->status,
            'dues' => $request->dues,
            'names' => $request->names,
            'block' => $request->block,

            'home_no' => $request->home_no,
            'cnic_no' => $request->cnic_no,
            'serial_no' => $request->serial_no,
            'registration_no' => $request->registration_no,
            'image' => $imageName,

        ]);

       $request->session()->flash('msg', 'New Plot Added Successfully');
       $request->session()->flash('type', 'success');

       return redirect()->route('plots.index');
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

        $plot = \App\Plots::where('id', $id)->first();

        return view("plots.show",compact("plot"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plot = \App\Plots::where('id', $id)->first();

        return view("plots.edit",compact("plot"));
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

        $plot  =  \App\Plots::where('id',$id)->update([

            'plot' => $request->plot, 
            'size' => $request->size, 
            'number' => $request->number,
            'reg' => $request->reg,
            'address' => $request->address,
            'contact_no' => $request->contact_no,
            'remarks' => $request->remarks,
            'status' => $request->status,
            'dues' => $request->dues,
            'names' => $request->names,
            'block' => $request->block,

        ]);

       $request->session()->flash('msg', 'Plot Updated Successfully');
       $request->session()->flash('type', 'success');

       return redirect()->route('plots.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        //


        $plot  =  \App\Plots::find($id);

        $is_del = $plot->delete();

        $request->session()->flash('msg', 'Plot Deleted Successfully');

        $request->session()->flash('type', 'danger');

        if($is_del){

            echo "success";
        }

    }
}
