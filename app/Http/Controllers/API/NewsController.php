<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return News::all();
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
        $obg = new News();
        $destinationPath = 'assets/img';
        $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
        $request->img->move($destinationPath, $imageName);
        $obg->img = '/' . $destinationPath . '/' . $imageName;


        DB::table('news')
            ->insert(array(
                'title_ens' => $request->title_ens,
                'title_uzs' => $request->title_uzs,
                'title_rus' => $request->title_rus,
                'content_ens' => $request->content_ens,
                'content_uzs' => $request->content_uzs,
                'content_rus' => $request->content_rus,
                'body_ens' => $request->body_ens,
                'body_uzs' => $request->body_uzs,
                'body_rus' => $request->body_rus,
                'img' => $obg->img
            ));
        return response()->json('success: mmalumot qoshildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news= News::where('id', $id)->get();

        if ($news) {
            return $news ;
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
    public function destroy(News $news)
    {
        $news->delete();

        return "Malumotlar muvofaqiyatli o`chirildi";

    }
}
