<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request)
    {
        auth()->user()->update($request->only('nama','email','tempat_tanggalLahir','agama','Asal_Sekolah','Alamat_Sekolah','Program_Keahlihan',
        'Nomor_Induk','Alamat_Rumah','notelp_Pribadi','notelp_OrangTua'));

        // if ($request->input('password')) {
        //     auth()->user()->update([
        //         'password' => bcrypt($request->input('password'))
        //     ]);
        // }

        return redirect()->route('profile')->with('message', 'Profile saved successfully');
    }
}
