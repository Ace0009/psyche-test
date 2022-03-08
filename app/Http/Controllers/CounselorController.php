<?php

namespace App\Http\Controllers;

use App\Models\Counselor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CounselorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->path = 'uploads/photo/';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counselors = Counselor::orderby('id','desc')->paginate(6);
        return view('admin.counselor.index',compact('counselors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.counselor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'specialty' => 'required',
            'photo' => 'required'
        ]);

        $counselor = new Counselor();
        $counselor->name = $request->name;
        $counselor->specialty = $request->specialty;
        $counselor->status = 0;
        if($request->photo){
            $img = $request->photo;

            $photo = uniqid('m').'img.'.$img->getClientOriginalExtension();
        }else{
            $photo = '';
        }
        $counselor->photo = $photo;
        $counselor->save();
        if($counselor->save()){
            if (!file_exists($this->path)){
                mkdir($this->path,755,true);
            }
            $img->move($this->path,$photo);
        }
        return redirect(route('counselors.index'))->with('status', 'data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function show(Counselor $counselor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $counselor = Counselor::find($id);
        return view('admin.counselor.edit',compact('counselor'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'specialty' => 'required',
        ]);
        $counselor = Counselor::find($id);
        $counselor->name = $request->name;
        $counselor->specialty = $request->specialty;
        $counselor->status = $counselor->status;
        if($request->photo){
            $img = $request->photo;
            $photo = uniqid('m').'img.'.$img->getClientOriginalExtension();
        }else{
            $photo = $counselor->photo;
        }
        $counselor->photo = $photo;
        $counselor->save();
        if ($counselor->save()){
            if (!file_exists($this->path)){
                mkdir($this->path,755,true);
            }
            $img->move($this->path,$photo);
        }
        return redirect(route('counselors.index'))->with('status','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $counselor = Counselor::find($id);
        if($counselor->photo != ''){
            if (file_exists($this->path.$counselor->photo)){
                unlink($this->path.$counselor->photo);
            }
        }
        Counselor::where('id',$id)->delete();
        return back()->with('status', 'data deleted successfully');
    }
}
