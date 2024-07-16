<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Team::all();
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
        $obg = new Team();
        $destinationPath = 'assets/img';
        $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
        $request->img->move($destinationPath, $imageName);
        $obg->img = '/' . $destinationPath . '/' . $imageName;


        DB::table('teams')
            ->insert(
                array(
                    'name_uzs' => $request->name_uzs,
                    'name_rus' => $request->name_rus,
                    'name_ens' => $request->name_ens,
                    'info_uzs' => $request->info_uzs,
                    'info_rus' => $request->info_rus,
                    'info_ens' => $request->info_ens,
                    'img' => $obg->img
                )
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::where('id', $id)->get();

        if ($team) {
           return $team;
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
    public function destroy(Team $team)
    {
        $team->delete();

        return "Malumotlar muvofaqiyatli o`chirildi";

    }
}
