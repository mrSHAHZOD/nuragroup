<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
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
            $haqimizda = 'о нас';

            $menu = array(
                'content_uz' => 'Контент Узб',
                'content_ru' => 'Контент Рус',
                'content_eng' => 'Контент Eng',
                'image' => 'Изображение',
                'date' => 'Дата начала',
            );
        }

        else if ($lang == 'ens')
        {
            $haqimizda = 'About';

            $menu = array(
                'content_uz' => 'Content Uzb',
                'content_ru' => 'Content Rus',
                'content_eng' => 'Content Eng',
                'image' => 'Image',
                'date' => 'Start date',
            );
        }

        else
        {
            $haqimizda = 'Biz haqimizda';

            $menu = array(
                'content_uz' => 'Kontent Uzb',
                'content_ru' => 'Kontent Rus',
                'content_eng' => 'Kontent Eng',
                'image' => 'Rasm',
                'date' => 'Vaqti',
            );
        }

        $about = DB::table('abouts')->orderBy('id', 'desc')->paginate(6);
        
        return view('admin.abouts.index', compact('about', 'haqimizda', 'menu'));
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

            $menu = array(
                'content_uz' => 'Контент Узб',
                'content_ru' => 'Контент Рус',
                'content_eng' => 'Контент Eng',
                'image' => 'Изображение',
                'qoshish' => 'Добавить',
                'qaytish' => 'Назад'
            );
        }

        else if ($lang == 'ens')
        {
            $menu = array(
                'content_uz' => 'Content Uzb',
                'content_ru' => 'Content Rus',
                'content_eng' => 'Content Eng',
                'image' => 'Image',
                'qoshish' => 'Add',
                'qaytish' => 'Back'
            );
        }

        else
        {

            $menu = array(
                'content_uz' => 'Kontent Uzb',
                'content_ru' => 'Kontent Rus',
                'content_eng' => 'Kontent Eng',
                'image' => 'Rasm',
                'qoshish' => 'Qo`shish',
                'qaytish' => 'Qaytish'
            );
        }

        $about = DB::table('abouts');
        return view('admin.abouts.create',compact('about', 'menu'));
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
        
            'content_uzs' => 'required',
            'content_rus' => 'required',
        ]);



        //  return Storage::put('img', $request->image, 'public'); bu usulda saqlasaham boladi
         $obg = new About();
         $destinationPath = 'assets/img';
         $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
         $request->img->move($destinationPath, $imageName);
         $obg->img = '/' . $destinationPath . '/' . $imageName;


         DB::table('abouts')
             ->insert(array(
                 'content_uzs' => $request->content_uzs,
                 'content_rus' => $request->content_rus,
                 'img' => $obg->img
         ));

          if($lang == 'rus')
         {
            return redirect()->route('abouts.index')
                                    ->with('success','Новости добавлены');
         }

         else if ($lang == 'ens')
         {
            return redirect()->route('abouts.index')
                                ->with('success','News added');
         }

         else
         {
            return redirect()->route('abouts.index')
                                ->with('success','Yangilik qo`shildi');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
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
            $menu = array(
                'content_uz' => 'Контент Узб',
                'content_ru' => 'Контент Рус',
                'content_eng' => 'Контент Eng',
                'image' => 'Изображение',
                'ozgartirish' => 'Изменить',
                'qaytish' => 'Назад'
            );
        }

        else if ($lang == 'ens')
        {
            $menu = array(
                'content_uz' => 'Content Uzb',
                'content_ru' => 'Content Rus',
                'content_eng' => 'Content Eng',
                'image' => 'Image',
                'ozgartirish' => 'Edit',
                'qaytish' => 'Back'
            );
        }

        else
        {

            $menu = array(
                'content_uz' => 'Kontent Uzb',
                'content_ru' => 'Kontent Rus',
                'content_eng' => 'Kontent Eng',
                'image' => 'Rasm',
                'ozgartirish' => 'O`zgartirish',
                'qaytish' => 'Qaytish'
            );
        }

        $about = DB::table('abouts')->where('id', $id)->get(); 
        return view('admin.abouts.edit',compact('about', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {

        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';

        if ($request->img) {
            $obg = new About();
             $destinationPath = 'assets/img';
             $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
             $request->img->move($destinationPath, $imageName);
             $obg->img = '/' . $destinationPath . '/' . $imageName;
    
            }
    
            switch ($request->hasFile('img')) {
                case '1':
                    $arrayName = array(              
                        
                        'content_uzs' => $request->content_uzs,
                        'content_rus' => $request->content_rus,
                        'img' => $obg->img
                     );
                    break;
            
                default:
                    $arrayName = array(
                        
                        'content_uzs' => $request->content_uzs,
                        'content_rus' => $request->content_rus            
                     );
                break;
            }
    
            $about = DB::table('abouts')->where('id', $id)->update($arrayName);
        
    
            if ($lang == 'rus')
            {
                return redirect()->route('abouts.index')
                                        ->with('success', 'Обновление завершено');
            }

            else if ($lang == 'ens')
            {
                return redirect()->route('abouts.index')
                                    ->with('success', 'Update completed');
            }

            else
            {
                return redirect()->route('abouts.index')
                                    ->with('success', 'Yangilanish bajarildi');
            }
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';


        $about=DB::table('abouts')->where('id', $id)->delete();

        if ($lang == 'rus')
            return redirect()->route('abouts.index')->with('success','Информация удалена');

        else if ($lang == 'ens')
            return redirect()->route('abouts.index')->with('success','Information deleted');

        else
            return redirect()->route('abouts.index')->with('success','Ma`lumot o`chirildi');
    
    }
}
