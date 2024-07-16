<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Gallery::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //  return Storage::put('img', $request->image, 'public'); bu usulda saqlasaham boladi
         $obg = new Gallery();
         $destinationPath = 'assets/img';
         $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
         $request->img->move($destinationPath, $imageName);
         $obg->img = '/' . $destinationPath . '/' . $imageName;


         DB::table('galleries')
             ->insert(array(
                 'info_uzs' => $request->info_uzs,
                 'info_rus' => $request->info_rus,
                 'info_ens' => $request->info_ens,
                 'img' => $obg->img
         ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::where('id', $id)->get();

        if ($gallery) {
           return $gallery ;
        }

        else
            return 'No content';
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return "Malumotlar muvofaqiyatli o`chirildi";

    }
}
