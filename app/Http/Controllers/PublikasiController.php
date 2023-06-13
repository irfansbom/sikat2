<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $auth = Auth::user();
        $data = Publikasi::paginate(15);
        return view('publikasi.index', compact('auth', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auth = Auth::user();
        $model = new Publikasi();
        $domain = Domain::all();
        return view('publikasi.create', compact(['auth', 'model', 'domain']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auth = Auth::user();
        $data = Publikasi::create([
            'title' => $request->title,
            'no_rak' => $request->no_rak,
            'domain' => $request->wilayah,
            'source' => $request->source,
            'release_date' => $request->release_date,
            'status_website' => $request->status_website,
            'abstract' => $request->abstract,
            'qrcode' => $request->qrcode,
            'created_by' => $auth->id,
        ]);

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $extension = $file->getClientOriginalExtension();
            $filename = "cover_" . $data->id . "." . $extension;
            $path = $file->storeAs('cover', $filename);
        }

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $extension = $file->getClientOriginalExtension();
            $filename = "pdf_" . $data->id . "." . $extension;
            $path = $file->storeAs('pdf', $filename);
        }

        if ($data) {
            return redirect('publikasi')->with('message', 'Berhasil Disimpan');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal Disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
