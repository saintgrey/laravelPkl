<?php

namespace App\Http\Controllers;

use App\Http\Requests\SapiStoreRequest;
use App\Http\Requests\SapiUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Sapi;
use App\Models\JenisSapi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Repositories\SapiRepository;
use File;
class tambahDataController extends Controller
{
    public function __construct(SapiRepository $SapiRepository)
    {
        $this->SapiRepository = $SapiRepository;
    }
    public function tambahData(){
        return view('tambahData');
    }

    public function tambahBaru(){
        // $pageslug="jenisSapi";
        $jenisSapi = JenisSapi::orderBy('id','asc')->get();

        return view('tambahBaru',
    compact(
    'jenisSapi'
    ));
    }

    public function store(SapiStoreRequest $request)
    {   
        $id = Auth::user()->id;
        $foto = $request->file('foto');
        $image = $foto->getClientOriginalName();

        $data = $this->SapiRepository->store($request, $image, $id);
        $this->SapiRepository->fileUpload($data, $image, $foto);
        return redirect('/list');
    }

    public function pindah(){
        return view('tambahBaru');
    }

    public function list(){
        $user = Auth::user()->id;
        $Sapiis = Sapi::where('id_user', $user)->get();
        return view('tambahData')->with(compact('Sapiis'));
    }
    public function delete(Sapi $Sapii)
    {
        $this->SapiRepository->delete($Sapii);
        $this->SapiRepository->deleteFile($Sapii);

        return redirect('/list');
    }

    public function edit($id)
    {
        $jenisSapi = JenisSapi::orderBy('id','asc')->get();
        $sapi = $this->SapiRepository->get($id);
        return view('update',
            compact(
                'sapi',
                'jenisSapi'   
            ));
    }

    public function update(SapiUpdateRequest $request, Sapi $sapi)
    {
        $id = Auth::user()->id;

        if (!empty($request->file('foto'))) {

            $foto = $request->file('foto');
            $image = $foto->getClientOriginalName();

            $this->SapiRepository->deleteFile($sapi);
            $this->SapiRepository->update($request, $sapi, $image);
            $this->SapiRepository->fileUpload($sapi, $image, $foto);

          
        }
        else {
            
            $sapi->id_jenis_sapi = $request->get('id_jenis_sapi');
            $sapi->umur = $request->get('umur');
            $sapi->id_user = $id;
            $sapi->jumlah = $request->get('jumlah');
            $sapi->deskripsi =$request->get('deskripsi');
            $sapi->save();
        }
        
        return redirect('/list');
    }

}
