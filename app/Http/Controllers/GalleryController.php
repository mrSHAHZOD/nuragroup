<?php

namespace App\Http\Controllers;

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
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';

            
        if ($lang == 'rus')
        {
            $galleriya = 'Галерея';

            $menu = array(
                'info_uz' => 'Информация Узб',
                'info_ru' => 'Информация Русь',
                'info_eng' => 'Информация Eng',
                'image' => 'Изображение',
            );
        }

        else if ($lang == 'ens')
        {
            $galleriya = 'Gallery';

            $menu = array(
                'info_uz' => 'Info Uzb',
                'info_ru' => 'Info Rus',
                'info_eng' => 'Info Eng',
                'image' => 'Image',
            );
        }

        else
        {
            $galleriya = 'Galeriya';

            $menu = array(
                'info_uz' => 'Ma`lumot Uzb',
                'info_ru' => 'Ma`lumot Rus',
                'info_eng' => 'Ma`lumot Eng',
                'image' => 'Rasm',
            );
        }

        $gallery = DB::table('galleries')->orderBy('id', 'desc')->paginate(6);
        
        return view('admin.galleries.index', compact('gallery', 'galleriya', 'menu'));
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
            $galleriya = 'Добавить';

            $menu = array(
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
            $galleriya = 'Add';

            $menu = array(
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
            $galleriya = 'Qo`shish';

            $menu = array(
                'info_uz' => 'Ma`lumot Uzb',
                'info_ru' => 'Ma`lumot Rus',
                'info_eng' => 'Ma`lumot Eng',
                'image' => 'Rasm',
                'qoshish' => 'Qo`shish',
                'qaytish' => 'Qaytish'
            );
        }

        $gallery = DB::table('galleries');
        return view('admin.galleries.create',compact('gallery', 'galleriya', 'menu'));
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

        if($lang == 'rus')
        {
            return redirect()->route('galleries.index')
                                    ->with('success','добавлены');
        }

        else if ($lang == 'ens')
        {
            return redirect()->route('galleries.index')
                                    ->with('success','added');
        }

        else
        {
            return redirect()->route('galleries.index')
                                ->with('success','Yangilik qo`shildi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
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
            $galleriya = 'изменение';

            $menu = array(
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
            $galleriya = 'Edit';

            $menu = array(
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
            $galleriya = 'Jamoa o`zgartirish';

            $menu = array(
                'info_uz' => 'Ma`lumot Uzb',
                'info_ru' => 'Ma`lumot Rus',
                'info_eng' => 'Ma`lumot Eng',
                'image' => 'Rasm',
                'ozgartirish' => 'O`zgartirish',
                'qaytish' => 'Qaytish'
            );
        }

        $gallery = DB::table('galleries')->where('id', $id)->get(); 
        return view('admin.galleries.edit',compact('gallery', 'galleriya', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';

        if ($request->img) {
            $obg = new Gallery();
             $destinationPath = 'assets/img';
             $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
             $request->img->move($destinationPath, $imageName);
             $obg->img = '/' . $destinationPath . '/' . $imageName;
    
            }
    
            switch ($request->hasFile('img')) {
                case '1':
                    $arrayName = array(              
                        'info_uzs' => $request->info_uzs,
                        'info_rus' => $request->info_rus,
                        'info_ens' => $request->info_ens,
                        'img' => $obg->img
                     );
                    break;
            
                default:
                    $arrayName = array(
                        'info_uzs' => $request->info_uzs,
                        'info_rus' => $request->info_rus,
                        'info_ens' => $request->info_ens          
                     );
                break;
            }
    
            $gallery = DB::table('galleries')->where('id', $id)->update($arrayName);
        
            if($lang == 'rus')
            {
               return redirect()->route('galleries.index')
                                       ->with('success','Обновление завершено');
            }

            else if ($lang == 'ens')
            {
                return redirect()->route('galleries.index')
                                       ->with('success','Update completed');
            }
   
            else
            {
               return redirect()->route('galleries.index')
                                   ->with('success','Yangilanish bajarildi');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (isset($_COOKIE["lang"])) 
        $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';


        $gallery=DB::table('galleries')->where('id', $id)->delete();

        if ($lang == 'rus')
            return redirect()->route('galleries.index')->with('success','Информация удалена');

        else if ($lang == 'ens')
            return redirect()->route('galleries.index')->with('success','Deleted');

        else
            return redirect()->route('galleries.index')->with('success','Ma`lumot o`chirildi');
    }
}
