<?php

namespace App\Http\Controllers;

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
        
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';

            
        if ($lang == 'rus')
        {
            $yangiliklar = 'Новости';

            $menu = array(
                'title_uz' => 'Название Узб',
                'title_ru' => 'Название Рус',
                'title_eng' => 'Название Eng',
                'content_uz' => 'Контент Узб',
                'content_ru' => 'Контент Рус',
                'content_eng' => 'Контент Eng',
                'image' => 'Изображение',
                'date' => 'Дата начала',
            );
        }

        else if($lang == 'ens')
        {
            $yangiliklar = 'News';

            $menu = array(
                'title_uz' => 'Title Uzb',
                'title_ru' => 'Title Rus',
                'title_eng' => 'Title Eng',
                'content_uz' => 'Content Uzb',
                'content_ru' => 'Content Rus',
                'content_eng' => 'Content Eng',
                'image' => 'Image',
                'date' => 'Start date',
            );
        }

        else
        {
            $yangiliklar = 'Yangiliklar';

            $menu = array(
                'title_uz' => 'Title Uzb',
                'title_ru' => 'Title Rus',
                'title_eng' => 'Title Eng',
                'content_uz' => 'Kontent Uzb',
                'content_ru' => 'Kontent Rus',
                'content_eng' => 'Kontent Eng',
                'image' => 'Rasm',
                'date' => 'Vaqti',
            );
        }

        $news = DB::table('news')->orderBy('id', 'desc')->paginate(6);
        
        return view('admin.news.index', compact('news', 'yangiliklar', 'menu'));
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
            $yangiliklar = 'Добавить новости';

            $menu = array(
                'title_uz' => 'Название Узб',
                'title_ru' => 'Название Рус',
                'title_eng' => 'Название Eng',
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
            $yangiliklar = 'Add news';

            $menu = array(
                'title_uz' => 'Title Uzb',
                'title_ru' => 'Title Rus',
                'title_eng' => 'Title Eng',
                'content_uz' => 'Content Uzb',
                'content_ru' => 'Content Rus',
                'content_eng' => 'Content Eng',
                'image' => 'Image',
                'qoshish' => 'Submit',
                'qaytish' => 'Back'
            );
        }

        else
        {
            $yangiliklar = 'Yangilik qo`shish';

            $menu = array(
                'title_uz' => 'Title Uzb',
                'title_ru' => 'Title Rus',
                'title_eng' => 'Title Eng',
                'content_uz' => 'Kontent Uzb',
                'content_ru' => 'Kontent Rus',
                'content_eng' => 'Kontent Eng',
                'image' => 'Rasm',
                'qoshish' => 'Qo`shish',
                'qaytish' => 'Qaytish'
            );
        }

        $news = DB::table('news');
        return view('admin.news.create',compact('news', 'yangiliklar', 'menu'));
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
            
            'title_uzs' => 'required',
            'title_rus' => 'required',
            'content_uzs' => 'required',
            'content_rus' => 'required',
        ]);



        //  return Storage::put('img', $request->image, 'public'); bu usulda saqlasaham boladi
         $obg = new News();
         $destinationPath = 'assets/img';
         $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
         $request->img->move($destinationPath, $imageName);
         $obg->img = '/' . $destinationPath . '/' . $imageName;


         DB::table('news')
             ->insert(array(
                 'title_uzs' => $request->title_uzs,
                 'title_rus' => $request->title_rus,
                 'title_ens' => $request->title_ens,
                 'content_uzs' => $request->content_uzs,
                 'content_rus' => $request->content_rus,
                 'content_ens' => $request->content_ens,
                 'body_uzs' => $request->body_uzs,
                 'body_rus' => $request->body_rus,
                 'body_ens' => $request->body_ens,
                 'img' => $obg->img
         ));

         if($lang == 'rus')
         {
            return redirect()->route('news.index')
                                    ->with('success','Новости добавлены');
         }

         else if($lang == 'ens')
         {
            return redirect()->route('news.index')
            ->with('success','News added');
         }

         else
         {
            return redirect()->route('news.index')
                                ->with('success','Yangilik qo`shildi');
         }
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
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
            $yangiliklar = 'Изменить новости';

            $menu = array(
                'title_uz' => 'Название Узб',
                'title_ru' => 'Название Рус',
                'title_eng' => 'Название Eng',
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
            $yangiliklar = 'Edit news';

            $menu = array(
                'title_uz' => 'Title Uzb',
                'title_ru' => 'Title Rus',
                'title_eng' => 'Title Eng',
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
            $yangiliklar = 'Yangilikni o`zgartirish';

            $menu = array(
                'title_uz' => 'Title Uzb',
                'title_ru' => 'Title Rus',
                'title_eng' => 'Title Eng',
                'content_uz' => 'Kontent Uzb',
                'content_ru' => 'Kontent Rus',
                'content_eng' => 'Kontent Eng',
                'image' => 'Rasm',
                'ozgartirish' => 'O`zgartirish',
                'qaytish' => 'Qaytish'
            );
        }

        $news = DB::table('news')->where('id', $id)->get(); 
        return view('admin.news.edit',compact('news', 'yangiliklar', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';

        if ($request->img) {
            $obg = new News();
             $destinationPath = 'assets/img';
             $imageName = 'img_' . rand(1000000, 9999999) . rand(1000000, 9999999) . '.' . $request->img->getClientOriginalExtension();
             $request->img->move($destinationPath, $imageName);
             $obg->img = '/' . $destinationPath . '/' . $imageName;
    
            }
    
            switch ($request->hasFile('img')) {
                case '1':
                    $arrayName = array(              
                        'title_uzs' => $request->title_uzs,
                        'title_rus' => $request->title_rus,
                        'title_ens' => $request->title_ens,
                        'content_uzs' => $request->content_uzs,
                        'content_rus' => $request->content_rus,
                        'content_ens' => $request->content_ens,
                        'body_uzs' => $request->body_uzs,
                        'body_rus' => $request->body_rus,
                        'body_ens' => $request->body_ens,
                        'img' => $obg->img
                     );
                    break;
            
                default:
                    $arrayName = array(
                        'title_uzs' => $request->title_uzs,
                        'title_rus' => $request->title_rus,
                        'title_ens' => $request->title_ens,
                        'content_uzs' => $request->content_uzs,
                        'content_rus' => $request->content_rus,
                        'content_ens' => $request->content_ens,
                        'body_uzs' => $request->body_uzs,
                        'body_rus' => $request->body_rus,
                        'body_ens' => $request->body_ens           
                     );
                break;
            }
    
            $news = DB::table('news')->where('id', $id)->update($arrayName);
        
    
        if($lang == 'rus')
         {
            return redirect()->route('news.index')
                                    ->with('success','Обновление завершено');
         }

         else if ($lang == 'ens')
         {
            return redirect()->route('news.index')
            ->with('success','Update completed');
         }

         else
         {
            return redirect()->route('news.index')
                                ->with('success','Yangilanish bajarildi');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (isset($_COOKIE["lang"])) 
            $lang = $_COOKIE["lang"]; 

        else 
            $lang = 'uzs';


        $news=DB::table('news')->where('id', $id)->delete();

        if ($lang == 'rus')
            return redirect()->route('news.index')->with('success','Информация удалена');
        
        else if($lang == 'ens')
            return redirect()->route('news.index')->with('success','Deleted');

        else
            return redirect()->route('news.index')->with('success','Ma`lumot o`chirildi');
    }
}
