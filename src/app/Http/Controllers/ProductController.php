<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Season;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //*登録画面表示*//
    //*全部のデータを取得する*//
    public function index()
    {
        return view('product');
    }

    //*一覧画面の+追加ボタンで登録画面に遷移*//
    public function create()
    {
        return view('register');
    }

    //*バリデーションの記述*//
    //*シンボリックリンクで画像を表示し、storageに保存する*//
    //*戻るボタンで一覧に戻る*//
    public function store(ProductRequest $request)
    {
        //*登録画面の登録ボタンでdbに保存し、一覧画面に戻る*//
        $product = $request->only(['name', 'price', 'image', 'description']);
        $image = $request->file('image');
        $file_name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('/public', $file_name);
        Product::create($product);
        return view('product');
    }


    //*商品カードをクリックすると詳細画面に遷移*//
    //*バリデーションの記述*//
    //*データの編集（変更）が出来る、db保存*//
    //データの削除が出来る*//
    //*戻るボタンで一覧に戻る*//

    //*検索ボタンで特定のデータを検索*//

    //*データの昇降順に並べ替える*//

    //*シーダ作成*//

}
