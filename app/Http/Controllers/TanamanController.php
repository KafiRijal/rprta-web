<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Exports\TanamanExport;
use Maatwebsite\Excel\Facades\Excel;

class TanamanController extends Controller
{
    public function tanaman()
    {
        return view('admin/tanaman/list');
    }

    public function tambah_tanaman()
    {
        return view('admin/tanaman/add');
    }

    public function edit_tanaman($id)
    {
        $tanaman = Tanaman::findOrFail($id);

        $data = [
            "tanaman" => $tanaman,
        ];

        return view('admin/tanaman/edit', $data);
    }

    public function _list_tanaman()
    {
        $tanaman = Tanaman::get();
        $data = $tanaman->map(function ($item) {
            return [
                'id' => $item->id,
                'nama' => $item->nama,
                'deskripsi' => $item->deskripsi,
            ];
        });

        return response()->json([
            'data' => $data
        ]);
    }

    public function _tambah_tanaman(Request $request)
    {
        $messages = [
            'nama.required' => 'Nama wajib diisi.',
            'deskripsi.required' => 'Deskripsi tanaman wajib diisi.',
            'manfaat.required' => 'Manfaat tanaman wajib diisi.',
            'fakta_unik.required' => 'Fakta Unik tanaman wajib diisi.',
            'image.max' => 'Image maksimal 10MB.',
            'image.mimes' => 'Format image harus jpg, jpeg, atau png.',
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'deskripsi' => 'required',
            'manfaat' => 'required',
            'fakta_unik' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $fotoNameWithExtension = null;

            if ($request->hasFile('image')) {
                $encryptedName = md5($request->nama . time());
                $fotoName = substr($encryptedName, 0, 40);
                $fotoExtension = $request->file('image')->getClientOriginalExtension();
                $fotoNameWithPrefix = time() . '_' . $fotoName;
                $foto = $request->file('image');
                $foto->move(public_path('image_tanaman'), $fotoNameWithPrefix . '.' . $fotoExtension);

                $fotoNameWithExtension = $fotoNameWithPrefix . '.' . $fotoExtension;
            }

            Tanaman::create([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'manfaat' => $request->manfaat,
                'fakta_unik' => $request->fakta_unik,
                'image' => $fotoNameWithExtension,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Data Berhasil Disimpan',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function _edit_tanaman(Request $request)
    {
        if ($request->image === '') {
            $request->merge(['image' => null]);
        }

        $messages = [
            'nama.required' => 'Nama wajib diisi.',
            'deskripsi.required' => 'Deskripsi tanaman wajib diisi.',
            'manfaat.required' => 'Manfaat tanaman wajib diisi.',
            'fakta_unik.required' => 'Fakta Unik tanaman wajib diisi.',
            'image.max' => 'Image maksimal 10MB.',
            'image.mimes' => 'Format image harus jpg, jpeg, atau png.',
        ];

        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'manfaat' => 'required|string',
            'fakta_unik' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:10240',
        ], $messages);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $tanaman = Tanaman::findOrFail($request->id);

            if ($request->hasFile('image')) {
                if ($tanaman->image && file_exists(public_path('image_tanaman/' . $tanaman->image))) {
                    unlink(public_path('image_tanaman/' . $tanaman->image));
                }

                $encryptedName = md5($request->nama . time());
                $fotoName = substr($encryptedName, 0, 40);
                $fotoExtension = $request->file('image')->getClientOriginalExtension();
                $fotoNameWithPrefix = time() . '_' . $fotoName;
                $foto = $request->file('image');
                $foto->move(public_path('image_tanaman'), $fotoNameWithPrefix . '.' . $fotoExtension);

                $tanaman->image = $fotoNameWithPrefix . '.' . $fotoExtension;
            }

            $tanaman->nama = $request->nama;
            $tanaman->deskripsi = $request->deskripsi;
            $tanaman->manfaat = $request->manfaat;
            $tanaman->fakta_unik = $request->fakta_unik;

            $tanaman->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Data Berhasil Diupdate',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat mengupdate data. Silakan coba lagi.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function _delete_tanaman($id)
    {
        try {
            $tanaman = Tanaman::findOrFail($id);
            $tanaman->delete();

            return response()->json([
                'message' => 'Data berhasil dihapus.'
            ], 200);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menghapus data.',
                'error' => $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menghapus data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function _export()
    {
        $tanaman = Tanaman::get();

        $data = $tanaman->map(function ($item) {
            return [
                'id' => $item->id,
                'deskripsi' => $item->deskripsi,
                'manfaat' => $item->manfaat,
                'fakta_unik' => $item->fakta_unik,
                'image' => $item->image ? asset('image_tanaman/' . $item->image) : '',
            ];
        });

        return Excel::download(new TanamanExport($data), 'Data Tanaman.xlsx');
    }
}
