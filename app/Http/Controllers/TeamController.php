<?php

namespace App\Http\Controllers;

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

        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';

            
        if ($lang == 'rus')
        {
            $jamoa = 'Работники команды';

            $menu = array(
                'name_uz' => 'Имя Узб',
                'name_ru' => 'Имя Русь',
                'name_eng' => 'Имя Eng',
                'info_uz' => 'Информация Узб',
                'info_ru' => 'Информация Русь',
                'info_eng' => 'Информация Eng',
                'image' => 'Изображение',
                'date' => 'Время',
            );
        }

        else if ($lang == 'ens')
        {
            $jamoa = 'Team workers';

            $menu = array(
                'name_uz' => 'Name Uzb',
                'name_ru' => 'Name Rus',
                'name_eng' => 'Name Eng',
                'info_uz' => 'Info Uzb',
                'info_ru' => 'Info Rus',
                'info_eng' => 'Info Eng',
                'image' => 'Image',
                'date' => 'Start date',
            );
        }

        else
        {
            $jamoa = 'Jamoa a`zolari';

            $menu = array(
                'name_uz' => 'Ism Uzb',
                'name_ru' => 'Ism Rus',
                'name_eng' => 'Ism Eng',
                'info_uz' => 'Ma`lumot Uzb',
                'info_ru' => 'Ma`lumot Rus',
                'info_eng' => 'Ma`lumot Eng',
                'image' => 'Rasm',
                'date' => 'Vaqti',
            );
        }

        $team = DB::table('teams')->orderBy('id', 'desc')->paginate(6);
        
        return view('admin.teams.index', compact('team', 'jamoa', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';

            
        if ($lang == 'rus')
        {
            $jamoa = 'Добавить члена команды';

            $menu = array(
                'name_uz' => 'Имя Узб',
                'name_ru' => 'Имя Русь',
                'name_eng' => 'Имя Eng',
                'info_uz' => 'Информация Узб',
                'info_ru' => 'Информация Русь',
                'info_eng' => 'Информация Eng',
                'image' => 'Изображение',
                'qoshish' => 'Добавить',
                'qaytish' => 'Назад'
            );
        }

        else if($lang == 'ens')
        {
            $jamoa = 'Add team member';

            $menu = array(
                'name_uz' => 'Name Uzb',
                'name_ru' => 'Name Rus',
                'name_eng' => 'Name Eng',
                'info_uz' => 'Info Uzb',
                'info_ru' => 'Info Rus',
                'info_eng' => 'Info Eng',
                'image' => 'Image',
                'qoshish' => 'Submit',
                'qaytish' => 'Back'
            );
        }

        else
        {
            $jamoa = 'Jamoa a`zosini qo`shish';

            $menu = array(
                'name_uz' => 'Ism Uzb',
                'name_ru' => 'Ism Rus',
                'name_eng' => 'Ism Eng',
                'info_uz' => 'Ma`lumot Uzb',
                'info_ru' => 'Ma`lumot Rus',
                'info_eng' => 'Ma`lumot Eng',
                'image' => 'Rasm',
                'qoshish' => 'Qo`shish',
                'qaytish' => 'Qaytish'
            );
        }

        $team = DB::table('teams');
        return view('admin.teams.create',compact('team', 'jamoa', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';

        $request->validate([
            
            'name_uzs' => 'required',
            'name_rus' => 'required',
            'info_uzs' => 'required',
            'info_rus' => 'required',
        ]);



        //  return Storage::put('img', $request->image, 'public'); bu usulda saqlasaham boladi
         $obg = new Team();
         $destinationPath = 'assets/img';
         $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
         $request->img->move($destinationPath, $imageName);
         $obg->img = '/' . $destinationPath . '/' . $imageName;


         DB::table('teams')
             ->insert(array(
                 'name_uzs' => $request->name_uzs,
                 'name_rus' => $request->name_rus,
                 'name_ens' => $request->name_ens,
                 'info_uzs' => $request->info_uzs,
                 'info_rus' => $request->info_rus,
                 'info_ens' => $request->info_ens,
                 'img' => $obg->img
         ));

        if($lang == 'rus')
        {
            return redirect()->route('teams.index')
                                    ->with('success','Новости добавлены');
        }

        else if ($lang == 'ens')
        {
            return redirect()->route('teams.index')
                                    ->with('success','News added');
        }

        else
        {
            return redirect()->route('teams.index')
                                ->with('success','Yangilik qo`shildi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';

            
        if ($lang == 'rus')
        {
            $jamoa = 'команды изменение';

            $menu = array(
                'name_uz' => 'Имя Узб',
                'name_ru' => 'Имя Русь',
                'name_eng' => 'Имя Eng',
                'info_uz' => 'Информация Узб',
                'info_ru' => 'Информация Русь',
                'info_eng' => 'Информация Eng',
                'image' => 'Изображение',
                'ozgartirish' => 'Изменить',
                'qaytish' => 'Назад'
            );
        }

        else if ($lang == 'ens')
        {
            $jamoa = 'Edit Team';

            $menu = array(
                'name_uz' => 'Name Uzb',
                'name_ru' => 'Name Rus',
                'name_eng' => 'Name Eng',
                'info_uz' => 'Info Uzb',
                'info_ru' => 'Info Rus',
                'info_eng' => 'Info Eng',
                'image' => 'Image',
                'ozgartirish' => 'Edit',
                'qaytish' => 'Back'
            );
        }

        else
        {
            $jamoa = 'Jamoa o`zgartirish';

            $menu = array(
                'name_uz' => 'Ism Uzb',
                'name_ru' => 'Ism Rus',
                'name_eng' => 'Ism Eng',
                'info_uz' => 'Ma`lumot Uzb',
                'info_ru' => 'Ma`lumot Rus',
                'info_eng' => 'Ma`lumot Eng',
                'image' => 'Rasm',
                'ozgartirish' => 'O`zgartirish',
                'qaytish' => 'Qaytish'
            );
        }

        $team = DB::table('teams')->where('id', $id)->get(); 
        return view('admin.teams.edit',compact('team', 'jamoa', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';

        if ($request->img) {
            $obg = new Team();
             $destinationPath = 'assets/img';
             $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
             $request->img->move($destinationPath, $imageName);
             $obg->img = '/' . $destinationPath . '/' . $imageName;
    
            }
    
            switch ($request->hasFile('img')) {
                case '1':
                    $arrayName = array(              
                        'name_uzs' => $request->name_uzs,
                        'name_rus' => $request->name_rus,
                        'name_ens' => $request->name_ens,
                        'info_uzs' => $request->info_uzs,
                        'info_rus' => $request->info_rus,
                        'info_ens' => $request->info_ens,
                        'img' => $obg->img
                     );
                    break;
            
                default:
                    $arrayName = array(
                        'name_uzs' => $request->name_uzs,
                        'name_rus' => $request->name_rus,
                        'name_ens' => $request->name_ens,
                        'info_uzs' => $request->info_uzs,
                        'info_rus' => $request->info_rus,
                        'info_ens' => $request->info_ens          
                     );
                break;
            }
    
            $team = DB::table('teams')->where('id', $id)->update($arrayName);
        
            if($lang == 'rus')
            {
               return redirect()->route('teams.index')
                                       ->with('success','Обновление завершено');
            }

            else if ($lang == 'ens')
            {
                return redirect()->route('teams.index')
                                       ->with('success','Update completed');
            }
   
            else
            {
               return redirect()->route('teams.index')
                                   ->with('success','Yangilanish bajarildi');
            }
    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (isset($_COOKIE["lang"])) 
        $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';


        $team=DB::table('teams')->where('id', $id)->delete();

        if ($lang == 'rus')
            return redirect()->route('teams.index')->with('success','Информация удалена');

        else if ($lang == 'ens')
            return redirect()->route('teams.index')->with('success','Deleted');

        else
            return redirect()->route('teams.index')->with('success','Ma`lumot o`chirildi');
    }
}
