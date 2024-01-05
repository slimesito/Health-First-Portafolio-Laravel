<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function adminindex(){

        return view('admin.home');
    }

    public function add_new_doctor(){

        return view('admin.add_doctor');
    }

    public function upload(Request $request){

        $request->validate([
            'image' => 'required|image|max:2048'
        ]);

        $doctor = new doctor;
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->email=$request->email;
        $doctor->specialty=$request->specialty;

        $image = $request->file('image');
        $destinationPath = 'storage/images/doctors/';
        $imagename = time() . '-' . $image->getClientOriginalName();
        $uploadSuccess = $request->file('image')->move($destinationPath, $imagename);
        $doctor->image = $destinationPath . $imagename;    

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor registrado satisfactoriamente');
    }

    public function appointments(){

        $data = appointment::all();

        return view('admin.appointments', compact('data'));
    }

    public function approve_appointment($id){

        $data = appointment::find($id);

        $data->status = 'Aprobada';

        $data->save();

        return redirect()->back()->with('message', 'Cita aprobada');
    }

    public function cancel_appointment($id){

        $data = appointment::find($id);

        $data->status = 'Canceleda';

        $data->save();

        return redirect()->back()->with('message', 'Cita cancelada');
    }

    public function show_all_doctors(){

        $data = doctor::all();

        if (request()->has('search')) {
            $data = $data->where('name','like', '%' . request()->get('search','') . '%');
        }

        return view('admin.all_doctors',[
            'data' => $data
        ]);
    }

    public function delete($id){

        $data = doctor::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Doctor eliminado satisfactoriamente');
    }

    public function update($id){

        $data = doctor::find($id);

        return view('admin.update_doctor', compact('data'));
    }

    public function edit(Request $request, $id){        

        $doctor = doctor::find($id);

        $doctor->name = $request->name;

        $doctor->phone = $request->phone;

        $doctor->email=$request->email;

        $doctor->specialty = $request->specialty;

        $image = $request->file;

        if($image)

        {

            $destinationPath = 'storage/images/doctors/';

            $imagename = time() . '-' . $image->getClientOriginalName();

            $request->file->move($destinationPath, $imagename);

            $doctor->image = $imagename;

        }

        $doctor->save();

        return redirect()->back()->with('message', 'Información actualizada satisfactoriamente');

    }
}
