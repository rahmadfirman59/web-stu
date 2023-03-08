<?php

namespace App\Http\Controllers\admin\portofolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;
use App\Models\PortofolioImage;
use Yajra\Datatables\Datatables;

class ImageController extends Controller
{
    public function index(){
        $data['data'] = Kategori::all();
        return view('admin.portofolio.portofolio-image.index', $data);
    }

    public function detail($id){
        return PortofolioImage::find($id);
    }

    public function datatables(){
        $data = PortofolioImage::with('kategori')->get();
        return Datatables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|file|max:5050|mimes:jpeg,jpg,png,webp',
            'kategori_id' => 'required',
        ],
        [
            'gambar.required' => 'Harap Masukkan Gambar',
            'kategori_id.required' => 'Kategori Belum Diisi',
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
        $request->file('gambar')->store('storage/portofolio');

        $values = array(
            'id' => $request['id'],
            'kategori_id' => $request['kategori_id'],
            'gambar' => $image,
        );

        PortofolioImage::create($values);


        return [
            'status' => 200,
            'message' => 'Data Berhasil Ditambahkan'
        ];
    }

    
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'kategori_id' => 'required',
        ],
        [
            'id.required' => 'Ooopss.... Terjadi Kesalahan ',
            'kategori_id.required' => 'Kategori Belum Diisi',
        ]);

        if($validator->fails()){
            return [
                'status' => 300,
                'message' => $validator->errors()->first()
            ];
        }
        $PortofolioImage = PortofolioImage::find($request->id);

        if (request()->hasFile('gambar') && request('gambar') != '') {
            $imagePath = public_path('storage/portofolio/'.$PortofolioImage->gambar);
            $image = $request->file('gambar')->hashName();
            request()->file('gambar')->store('storage/portofolio');
            $values = array(
                'id' => $request['id'],
                'kategori_id' => $request['kategori_id'],
                'gambar' => $image,
            );
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }else{
            $values = array(
                'id' => $request['id'],
                'kategori_id' => $request['kategori_id'],
            );
        }
        
        
        $PortofolioImage->update($values);

        
        return [
            'status' => 200,
            'message' => 'Data Berhasil Diubah'
        ];
    }

    public function delete($id){
        $PortofolioImage = PortofolioImage::where('id',$id)->first();
        File::delete("code/public/storage/portofolio/" . $PortofolioImage['gambar']);
        PortofolioImage::where('id', $id)->delete();

        return [
            'status' => 200,
            'message' => 'Data berhasil Dihapus'
        ];
    }
}

