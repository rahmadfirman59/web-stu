<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
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

        $image = $request->file('gambar')->hashName();
        $request->file('gambar')->store('storage/slider');

        $values = array(
            'id' => $request['id'],
            'keterangan' => $request['keterangan'],
            'gambar' => $image,
        );

        Slider::create($values);

        return [
            'status' => 200,
            'message' => 'Data Berhasil Ditambahkan'
        ];
    }

    
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'keterangan' => 'required',
        ],
        [
            'id.required' => 'Ooopss.... Terjadi Kesalahan ',
            'keterangan.required' => 'Keterangan Belum Diisi',
        ]);

        if($validator->fails()){
            return [
                'status' => 300,
                'message' => $validator->errors()->first()
            ];
        }
        $slider = Slider::find($request->id);

        if (request()->hasFile('gambar') && request('gambar') != '') {
            $imagePath = public_path('storage/slider/'.$slider->gambar);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
        
        request()->file('gambar')->store('storage/slider');
        $image = $request->file('gambar')->hashName();
        $values = array(
            'id' => $request['id'],
            'keterangan' => $request['keterangan'],
            'gambar' => $image,
        );
        
        $slider->update($values);

        
        return [
            'status' => 200,
            'message' => 'Data Berhasil Diubah'
        ];
    }

    public function delete($id){
        $slider = Slider::where('id',$id)->first();
        File::delete("code/public/storage/slider/" . $slider['gambar']);
        Slider::where('id', $id)->delete();

        return [
            'status' => 200,
            'message' => 'Data berhasil Dihapus'
        ];
    }
}
