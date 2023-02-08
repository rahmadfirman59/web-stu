<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;
use Yajra\Datatables\Datatables;

class SliderController extends Controller
{
    public function index(){
        return view('admin.slider.index');
    }

     public function detail($id){
        return Slider::find($id);
    }

    public function datatables(){
        $data = Slider::get();
        return Datatables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|file|max:5050|mimes:jpeg,jpg,png',
            'keterangan' => 'required',
        ],
        [
            'gambar.required' => 'Harap Masukkan Gambar',
            'keterangan.required' => 'Keterangan Belum Diisi',
            'gambar.image' => 'Gambar Tidak Valid',
            'gambar.max' => 'Maksimal Ukuran Gambar 5 Megabyte',
            'gambar.mimes' => 'Yang anda Masukkan Bukan Gambar',
        ]);

        if($validator->fails()){
            return [
                'status' => 300,
                'message' => $validator->errors()
            ];
        }

        $request->file('gambar')->store('slider');
        DB::table('sliders')->insert([
            "gambar" => $request->file('gambar'),
            "keterangan" => $request['keterangan'],
        ]);

        return [
            'status' => 200,
            'message' => 'Data Berhasil Ditambahkan'
        ];
    }

    
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'kategori' => 'required',
            'kategori_slug' => 'required'
        ],
        [
            'id.required' => 'Ooopss.... Terjadi Kesalahan ',
            'kategori.required' => 'Kategori Belum Diisi',
            'kategori_slug.required' => 'Kategori Slug Belum Diisi',
        ]);

        if($validator->fails()){
            return [
                'status' => 300,
                'message' => $validator->errors()->first()
            ];
        }
        
        return [
            'status' => 200,
            'message' => 'Data Berhasil Diubah'
        ];
    }

    public function delete($id){
        $slider = Slider::where('id',$id)->first();
        Storage::delete("public/slider-image/" . $slider['gambar_hash']);
        Slider::where('id', $id)->delete();

        return [
            'status' => 200,
            'message' => 'Data berhasil didelete'
        ];
    }
}
