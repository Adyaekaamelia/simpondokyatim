<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Kebutuhan;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function kegiatanya()
    {

        $kegiatan = Kegiatan::all();
        return view('frontend.kegiatan', compact('kegiatan'));

    }

    public function kebutuhanya()
    {

        $kebutuhan = Kebutuhan::all();
        return view('frontend.kebutuhan', compact('kebutuhan'));

    }

    public function donasi()
    {
        return view('frontend.donasi');

    }

    public function storeDonasi(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_tlpn' => 'required',
            'ket' => 'required',
            'nominal' => 'required',
            'bukti' => 'required|image|max:2048',
        ]);

        $donasi = new Donasi;
        $donasi->nama = $request->nama;
        $donasi->email = $request->email;
        $donasi->no_tlpn = $request->no_tlpn;
        $donasi->ket = $request->ket;
        $donasi->nominal = $request->nominal;
        // upload image / foto
        if ($request->hasFile('bukti')) {
            $image = $request->file('bukti');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/donasi/', $name);
            $donasi->bukti = $name;
        }
        $donasi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);
        return redirect()->route('createDonasi');

    }
}
