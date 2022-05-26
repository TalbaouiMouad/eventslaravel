<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function showEventForm(){
        return view('dashboard.formaddevent');
    }
    public function showEventlist(){
        $events=Event::paginate(10);
        return view('dashboard.eventlist',['events'=>$events]);
    }
    public function addEvents(Request $request){
        $validator=Validator::make($request->all(),[
            'event_name'=>'required|max:50',
            'event_date'=>'required',
            'event_picture'=>'required|mimes:png,jpg'
        ]);
        $validator->validate();
        $path = $request->file('event_picture')->store('public/img','public');
        $event=new Event();
        $event->event_name=$request->event_name;
        $event->description=$request->description;
        $event->event_date=$request->event_date;
        $event->event_picture='storage/'.$path;
        $event->save();
        return redirect('/eventlist')->with('status','event added seccussfully');
    }
    public function showEventsCards(){
        $events=Event::all();
        return view('guest.eventscards',['events'=>$events]);
    }
    public function showupdateform($id){
        $event=Event::findOrFail($id);
        // return redirect()->route('formupdate')->with('event',$event);
        return view('dashboard.updateeventform', ['event'=>$event]);
    }

    public function update(Request $request){
        $event=Event::find($request->event_id);
        // dd($request->event_id);
        $event->event_name=$request->event_name;
        $event->description=$request->description;
        $event->event_date=$request->event_date;
        $event->update();
        return redirect('eventlist')->with('status','updated successfully');
    }
    public function delete($id){
        $event=Event::find($id);
        $event->delete();
        return redirect('eventlist')->with('status','deleted successfully');
    }
}
