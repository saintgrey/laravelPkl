<?php

namespace App\Repositories;

use App\Http\Requests\SapiStoreRequest;
use App\Http\Requests\SapiUpdateRequest;
use Auth;

use App\Models\Sapi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use File;

class SapiRepository
{
    private $model;

    public function __construct(Sapi $model)
    {
        $this->model = $model;
    }

    public function get($id)
    {
        $sapi = $this->model->where('id', $id)->first();

        return $sapi;
    }

    public function store(SapiStoreRequest $request, $image, $id)
    {
        DB::beginTransaction();

        $sapi = $this->model->create([
            'id_jenis_sapi' => $request->id_jenis_sapi,
            'id_user' => $id,
            'umur' => $request->umur,
            'jumlah' => $request->jumlah,
            'deskripsi' => $request->deskripsi,
            'foto' => $image
        ]
        );
        DB::commit();
        return $sapi;
    }

    public function fileUpload($data, $image, $foto)
    {
        DB::beginTransaction();

        try {
            $foto->move(public_path('assets/img/foto'), $image);
            $data->foto = $image;
            $data->save();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception($e);
        }
    }

    public function delete(Sapi $Sapii)
    {
        DB::beginTransaction();

        try {
            $Sapii->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw new \Exception($e);
        }
    }
    public function deleteFile(Sapi $Sapii)
    {
        File::delete(public_path('assets/img/foto/' . $Sapii->image));
    }

    public function update(SapiupdateRequest $request, Sapi $Sapii, $image)
    {
        DB::beginTransaction();

        
            $Sapii->update([
                    'id_jenis_sapi' => $request->id_jenis_sapi,
                    'umur' => $request->umur,
                    'jumlah' => $request->jumlah,
                    'deskripsi' => $request->deskripsi,
                    'foto' => $image
                ]
            );
            DB::commit();
            return $Sapii;
        
    }
}

