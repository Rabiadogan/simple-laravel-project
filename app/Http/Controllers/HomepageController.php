<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Validator;
use Mail;


//Models
use App\Models\Pages;
use App\Models\Text;
use App\Models\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewMessage;
class HomepageController extends Controller
{
    public function __construct()
    {
        view()->share('pages', Pages::orderBy('order','ASC')->get());
        view()->share('texts', Text::inRandomOrder()->first());
    }
    public function homepage()
    {
        // $dataTexts = Text::inRandomOrder()->get();
        return view('homepage');
    }

    public function page($page) {
        $page = Pages::whereSlug($page)->first() ?? abort('403', 'Böyle bir sayfa yok!!!');
        $data['page']=$page;
        return view('page', $data);
    }

    public function iletisim()
    {
        return view('iletisim');
    }

    public function iletisimPost(Request $request)
    {
        // $kurallar = $request->validate([
        //     'name'=>'required|min:5',
        //     'mail'=>'required|email',
        //     'subject'=>'required',
        //     'message'=>'required|min:20',
        // ]);

        // $kontrol = Validator::make($request->post(), $kurallar);

        // if ($kontrol->fails()) {
        //     return redirect()->back()->withErrors($kontrol)->withInput();
        // }

        Mail::send([], [], function () {
            Notification::route('mail','anani@optum.com')->notify(new NewMessage());
        });
        //dd($request->post());
        $iletisim = new Contact();
        $iletisim->name = $request->name;
        $iletisim->mail = $request->email;
        $iletisim->subject = $request->subject;
        $iletisim->message = $request->message;
        $iletisim->save();
        return redirect()->back()->with('success' , 'Kamil mesajın ulaştı');
    }
}
