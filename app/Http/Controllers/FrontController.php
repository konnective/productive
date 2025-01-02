<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //creating cards for each projects
    // days count kai rite thase?
    // card ni andar j count hoy jya thi id vade api call
    //loader find karine mukvu..
    //## project inspiration for note making is github.com, laracast.com
    //hve view file mathi ajax call marvo api mate
    // bas khali per api call right div load thava joie = 30-12
    // solve karvu cdn issue
    public  function index()
    {
        return view('front.profile');
    }
    public  function home()
    {
        $projects = Note::all();
        return view('front.home',compact('projects'));
    }
    public  function note($id)
    {
        $note = Note::find($id);
        return view('front.note',compact('note'));
    }
    public  function project_data($id)
    {
        // hve ajax call mate nu logic set karo 
        // also jquery ni cdn muko
        $project = Project::with('days')->find($id);
        $html = '';
        $div = '<div class="marker"></div>';
        $divMarked = '<div class="marked"></div>';
        if($project){
            foreach($project->days as $item){
                if($item->is_done === 1){
                    $html.=$divMarked;
                }else{
                    $html.=$div;
                    
                }
            }
        }
        $res= [
            "success"=>true,
            "html"=>$html
        ];
        return response()->json($res);
    }

    public  function profile()
    {
        return view('front.profile');
    }
}
