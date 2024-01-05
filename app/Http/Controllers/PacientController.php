<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class PacientController extends Controller
{
    public function myappointments(){

        if(Auth::id())
        {

            $userid = Auth::user()->id;

            $appoint = appointment::where('user_id', $userid)->get();

            return view('pacients.appointments', compact('appoint'));
        }

        else
        {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id){

        $data = appointment::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function book(){

        $doctor = doctor::all();

        return view('pacients.book', compact('doctor'));
    }

    public function uploadappointment(Request $request)
    {
        $data = new appointment;

        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->doctor = $request->doctor;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = 'En progreso';
        $data->user_id = Auth::user()->id;

        $data->save();

        return redirect()->back()->with('success', 'Cita reservada satisfactoriamente . Nos contactaremos contigo pronto');
    }
}
