<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use App\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Psy\Util\Json;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::all();
        if (count($siswa) <= 0) {
            $response = [
                'success' => false,
                'data' => 'empty',
                'message' => 'siswa tidak ditemukan.'
            ];
        }
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Berhasil.'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // tampung semua inputan ke $input
        $input = $request->all();
        // 2. buat validasi ditampung ke $validator
        $validator = Validator::make($input, [
            'nama' => 'required|min:15'
        ]);
        // 3. cek validasi
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validator error .',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }
        // 4. buat fungsi untuk menghandle semua inputan
        //-> dimasukan ketable
        $siswa = siswa::create($input);
        //5. menampilkan response
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'siswa berhasil ditambahkan.'
        ];
        //tampilkan hasil
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Siswa::all();
        if (!siswa) {
            $response = [
                'success' => false,
                'data' => 'empty',
                'message' => 'siswa tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Berhasil.'
        ];
        return response()->json($response, 200);
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
        $siswa = siswa::find($id);
        $input = $request->all();
        if (!$siswa) {
            $response = [
                'success' => false,
                'data' => 'empty',
                'message' => 'siswa tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }
        $validator = Validator::make($input, [
            'nama' => 'required|min:15'
        ]);
        // 3. cek validasi
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validator error .',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }
        $siswa->nama = $input['nama'];
        $siswa->save();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Berhasil di update.'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = siswa::find($id);
        if (!$siswa) {
            $response = [
                'success' => false,
                'data' => 'empty',
                'message' => 'siswa tidak ditemukan.'
            ];
            return response()->json($response, 404);
        }
        $siswa->delete();
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Berhasil di delete.'
        ];
        return response()->json($response, 200);
    }
}
