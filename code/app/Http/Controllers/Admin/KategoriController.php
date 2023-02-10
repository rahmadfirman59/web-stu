<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Yajra\Datatables\Datatables;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        return view('admin.portofolio.kategori.index');
    }

    public function datatables(){
        $data = Kategori::select(['id', 'kategori', 'kategori_slug']);
        return Datatables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }

    public function detail($id){
        return Kategori::find($id);
    }

    public function createSlug(Request $request){
        $slug = SlugService::createSlug(Kategori::class, 'kategori_slug', $request->kategori);
        return response()->json(['kategori_slug' => $slug]);
    }

    public function store(Request $request){
        // $validator = Validator::make($request->all(), [
        //     'kategori' => 'required',
        //     'kategori_slug' => 'required'
        // ],
        // [
        //     'kategori.required' => 'Kategori Belum Diisi',
        //     'kategori_slug.required' => 'Kategori Slug Belum Diisi',
        // ]);

        // if($validator->fails()){
        //     return [
        //         'status' => 300,
        //         'message' => $validator->errors()->first()
        //     ];
        // }
        
        Kategori::create($request->all());
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

        $kategori = Kategori::find($request->id);
        $kategori->update([
            'kategori' => $request->kategori,
            'kategori_slug' => $request->kategori_slug,
        ]);
        
        return [
            'status' => 200,
            'message' => 'Data Berhasil Diubah'
        ];
    }

    public function delete($id){
        Kategori::where('id', $id)->delete();

        return [
            'status' => 200,
            'message' => 'Data berhasil didelete'
        ];
    }
}
