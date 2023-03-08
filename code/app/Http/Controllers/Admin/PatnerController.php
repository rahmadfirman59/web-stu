<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Models\Patner;
use Yajra\Datatables\Datatables;


class PatnerController extends Controller
{

    public function index(){
        return view('admin.patner.index');
    }

    public function detail($id){
        return Patner::find($id);
    }

    public function datatables(){
        $data = Patner::get();
        return Datatables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'logo' => 'image|file|max:5050|mimes:jpeg,jpg,png,webp',
            'nama_perusahaan' => 'required',
        ],
        [
            'nama_perusahaan.required' => 'Nama Perusahaan Belum Diisi',
            'logo.image' => 'Logo Perusahaan Tidak Valid',
            'logo.max' => 'Maksimal Ukuran Logo Perusahaan 5 Megabyte',
            'logo.mimes' => 'Yang anda Masukkan Bukan Logo Perusahaan',
        ]);

        if($validator->fails()){
            return [
                'status' => 300,
                'message' => $validator->errors()
            ];
        }

        if (request()->hasFile('logo') && request('logo') != '') {
            $image = $request->file('logo')->hashName();
            $request->file('logo')->store('storage/patner_logo');
    
            $values = array(
                'id' => $request['id'],
                'nama_perusahaan' => $request['nama_perusahaan'],
                'logo' => $image,
            );
        } else {
            $values = array(
                'id' => $request['id'],
                'nama_perusahaan' => $request['nama_perusahaan'],
            );
        }


        Patner::create($values);


        return [
            'status' => 200,
            'message' => 'Data Berhasil Ditambahkan'
        ];
    }

    
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'nama_perusahaan' => 'required',
        ],
        [
            'id.required' => 'Ooopss.... Terjadi Kesalahan ',
            'nama_perusahaan.required' => 'Nama Perusahaan Belum Diisi',
        ]);

        if($validator->fails()){
            return [
                'status' => 300,
                'message' => $validator->errors()->first()
            ];
        }
        $Patner = Patner::find($request->id);

        if (request()->hasFile('logo') && request('logo') != '') {
            $imagePath = public_path('storage/patner_logo/'.$Patner->logo);
            $image = $request->file('logo')->hashName();
            request()->file('logo')->store('storage/patner_logo');
            $values = array(
                'id' => $request['id'],
                'nama_perusahaan' => $request['nama_perusahaan'],
                'logo' => $image,
            );
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }else{
            $values = array(
                'id' => $request['id'],
                'nama_perusahaan' => $request['nama_perusahaan'],
            );
        }
        
        
        $Patner->update($values);

        
        return [
            'status' => 200,
            'message' => 'Data Berhasil Diubah'
        ];
    }

    public function delete($id){
        $Patner = Patner::where('id',$id)->first();
        File::delete("code/public/storage/portofolio/" . $Patner['gambar']);
        Patner::where('id', $id)->delete();

        return [
            'status' => 200,
            'message' => 'Data berhasil Dihapus'
        ];
    }

}
