<?php

namespace App\Http\Controllers;

use App\News;
use App\News_img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    public function index()
    {
        $all_news = News::all(); //建立一個all_news放入所有News model的資料
        return view('admin/news/index', compact('all_news')); //return要顯示的畫面還有"變數名稱"  (news->表單)
    }

    public function create()
    {
        return view('admin/news/create'); //return要顯示的畫面還有"變數名稱"  (news->表單)
    }

    public function store(Request $request)
    {

        $news_date = $request->all(); // Request是個物件用all將他轉成陣列儲存到$news_date

        $file_name = $request->file('main_img')->store('', 'public'); //存照片到public/storage,並將圖片重新命名 將單張的main_img圖片存到'本地端'

        $news_date['img'] = $file_name; //覆蓋原本$news_date['img']路徑名稱

        $news_img = News::create($news_date); //將News::create($news_date)的資料存到$news_img並將$news_date先存檔

        $news_img_id = $news_img->id; //我們要取得主要的圖片的ID但$news_date沒有input這個選項所以我們從$news_img取得ID

        if ($request->hasFile('imgs')) //如果$request有imgs
        {
            $files = $request->file('imgs'); //先將$request的imgs存到$files

            foreach ($files as $file) { //將多筆的$files foreach
                $path = $file->store('', 'public'); //存照片到public/storage,並將圖片重新命名

                //儲存到資料庫
                $news_img = new News_img;
                $news_img->news_id = $news_img_id;
                $news_img->img = $path;
                $news_img->save();
            }
        }

        return redirect('home/news');
    }

    public function edit($id)
    {
        $news = News::find($id);
        // $news_img =News::with('news_img');

        return view('admin/news/edit', compact('news'));
    }

    public function update(Request $request, $id)
    {

        $item = News::find($id); //舊資料，因為資料還沒更新所以抓到的是舊的，透過資料庫抓出來的檔案

        $requsetData = $request->all(); //要更新的資料，透過resquest傳進來要更新的表單

        // dd(public_path() . "\storage" );

        if ($request->hasFile('img')) { //如果資料庫有新圖片
            $old_image = $item->img;
            Storage::disk('local')->delete('public/' . $old_image); //laravel寫法
            $file_name = $request->file('img')->store('', 'public'); //存照片到public/storage
            $requsetData['img'] = $file_name;
        }

        if ($request->hasFile('imgs')) {
            $files = $request->file('imgs');

            foreach ($files as $file) {
                $path = $file->store('', 'public');
                $news_img = new News_img;
                $news_img->news_id = $id;
                $news_img->img = $path;
                $news_img->save();
            }
        }

        News::find($id)->update($requsetData);

        return redirect('home/news');
    }

    public function delete($id)
    {
        //直接去找資料庫裡的ID進行刪除
        $date = News::find($id);
        News::find($id)->delete();
        Storage::disk('local')->delete('public/' . $date->img);

        $files = News_img::where('news_id', $id)->get(); //用where去找資料庫裡news_id跟$id相同的欄位然後get
        foreach ($files as $file) {
            $file->delete();
            Storage::disk('local')->delete('public/' . $file->img);
        }

        return redirect('home/news');
    }

    public function ajax_delete_news_imgs(Request $request)
    {
        $id = $request->news_img_id; //將id從前端的request取出
        $img_data = News_img::find($id);
        News_img::find($id)->delete();
        Storage::disk('local')->delete('public/' . $img_data->img);
        return $id;
    }

    public function ajax_sort_news_imgs(Request $request)
    {
        $id = $request->imgs_id;
        $sort = $request->img_sort;
        $news_img = News_img::find($id);
        $news_img->sort = $sort;
        $news_img->save();

        return ;
    }

}
