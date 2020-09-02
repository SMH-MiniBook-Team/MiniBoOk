<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\user;
class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::orderBy('created_at','desc')->get();
        return view('home',['publications' => $publications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publications.create');
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
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi'
            ]);

        $publication = new Publication();
        $publication->content = $request['content'];

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/postimage/', $filename);
            $publication->image = $filename;
        }

        if($request->hasfile('video')){
            $video = $request->file('video');
            $extensions = $video->getClientOriginalExtension(); // getting image extension
            $videoname = time() . '.' . $extensions;
            $video->move('uploads/postvideos/', $videoname);
            $publication->video = $videoname;
        }
        $message= 'An error has occurred';
        if ($request->user()->publications()->save($publication)){
            $message= 'Post Succesfully Created!';
        }
      
        return redirect()->route('home')
        ->with('success', $message);            
    }

                   
    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        return view('publications.show',['publication' => $publication]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        return view('publications.edit',['publication' => $publication]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $publication_id)
    {
      
        $this->validate($request, [
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi'
        ]);
        $publication = Publication::where('id', $publication_id)->first();
        if( Auth::user() != $publication->user)
        {
            return redirect()->back();
        }
        $publication->content= $request['content'];


        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/postimage/', $filename);
            $publication->image = $filename;
        }

        if($request->hasfile('video')){
            $video = $request->file('video');
            $extensions = $video->getClientOriginalExtension(); // getting image extension
            $videoname = time() . '.' . $extensions;
            $video->move('uploads/postvideos/', $videoname);
            $publication->video = $videoname;
        }

        $publication->update();
      //  Publication::where('id', $publication_id)->update( ['contenu' => $request->contenu] );  
        return redirect()->route('home')
                        ->with('success','Publication updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy($publication_id)
    {
      $publication = Publication::where('id', $publication_id)->first();
        if( Auth::user() != $publication->user)
        {
            return redirect()->back();
        }
        $publication->delete();
        
            return redirect()->route('home')
                        ->with('success','Publication deleted successfully');
        
        
    }


    public function share($publication_id)
    {
        $publication = Publication:: where('id', $publication_id)->first();
       
        $publication->save();
  
        return redirect()->route('home')
                        ->with('success','Publication shared successfully');
    }

    public function showFromNotification(Publication $publication , DatabaseNotification $notification)
    {
        $notification->markAsRead(); //apres la leture de notification->reat_at dans data base ne reste pas null
        return view('publications.show',['publication' => $publication]);
    }

}
