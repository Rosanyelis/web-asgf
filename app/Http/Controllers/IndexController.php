<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\EmailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.web');
    }
    public function residential_home()
    {
        return view('web.redhomenternament');
    }
    public function residential_smarthome()
    {
        return view('web.redsmarthome');
    }
    public function residential_lighting()
    {
        return view('web.redlighting');
    }
    public function residential_security()
    {
        return view('web.redsecurity');
    }

    public function comercial_security()
    {
        return view('web.comercialsecurity');
    }
    public function comercial_professional()
    {
        return view('web.comercialprofessional');
    }
    public function comercial_it()
    {
        return view('web.comercialit');
    }
    public function marine_start()
    {
        return view('web.marinestart');
    }
    public function marine_kvh()
    {
        return view('web.marinekvh');
    }
    public function marine_system()
    {
        return view('web.marinesystem');
    }
    public function marine_video()
    {
        return view('web.marinevideo');
    }
    public function about()
    {
        return view('web.about');
    }
    public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('web.blog', compact('posts'));
    }
    public function blog_details($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();
        $data = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('web.article', compact('post', 'data'));
    }
    public function contact()
    {
        return view('web.contact');
    }

    public function contact_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        try {
            Mail::to('gestion.advancesystemsgroup@gmail.com')
                ->send(new EmailContact($request->name, $request->message, $request->email));
                
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }

    }

}
