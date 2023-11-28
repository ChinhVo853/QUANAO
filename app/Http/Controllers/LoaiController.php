<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loai;
class LoaiController extends Controller
{
    public function View()
    {
        $loai = Loai::all();
        return view('LOAI/danh-sach',compact('loai'));
    }
    public function themMoi()
    {
        return View('LOAI/them');
    }
    public function xuLyThemMoi(Request $request)
    {
        $loai= new Loai();

        $loai->ten=$request->ten;

        $loai->save();
        return redirect()->route("loai.danh-sach");
    }
    public function Edit($id)
    {
        $loai=Loai::find($id);
        if(empty($loai))
        {
            return redirect()->route("loai.danh-sach");
        }
        return view("LOAI.cap-nhat", compact("loai"));
    }
    public function xlEdit(Request $request, $id)
    {
        $loai=Loai::find($id);
        $loai->ten=$request->ten;
        $loai->save();
        return redirect()->route("loai.danh-sach");
    }
    public function Delete($id)
    {
        $loai=Loai::find($id);
        if(empty($loai))
        {
            return redirect()->route("loai.danh-sach");
        }
        $loai->delete();
        return redirect()->route("loai.danh-sach");
    }
}
