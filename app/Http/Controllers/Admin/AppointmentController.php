<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AppointmentRequest;
use App\Http\Requests\Admin\AppointmentUpdateRequest;
use App\Traits\StatusTrait;

class AppointmentController extends Controller
{
    use StatusTrait;
    public function index() : View
    {
        return view('admin.appointment.index', [
            'appointments' => Appointment::query()->select(['id', 'name','phone','age','address','email','date','status'])->latest()->get()
        ]);
    }

    public function create() : View
    {
        return view('admin.appointment.create');
    }

    public function store(AppointmentRequest $request) : RedirectResponse
    {
        $appointment = Appointment::create($request->validated());

        return redirect()->route('admin.appointments.index')->with('success', 'Appointment Created Successfully!');
    }

    public function show(Appointment $appointment) : View
    {
        return view('admin.appointment.show', compact('appointment'));
    }

    public function edit(Appointment $appointment) : View
    {
        return view('admin.appointment.edit', compact('appointment'));
    }

    public function update(AppointmentUpdateRequest $request, Appointment $appointment) : RedirectResponse
    {
        $appointment->update($request->validated());

        return redirect()->route('admin.appointments.index', ['appointment' => $appointment->id])->with('success', 'Appointment Updated Successfully!');
    }

    public function destroy(Appointment $appointment) : RedirectResponse
    {
        

        $appointment->delete();

        return redirect()->route('admin.appointments.index')->with('error', 'Appointment Deleted Successfully!');
    }

    public function changeStatus(Request $request):void {
$this->changeItemStatus('Appointment',$request->id,$request->status);
}

}
