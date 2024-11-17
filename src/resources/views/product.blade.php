@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection

@section('content')
<div class="product-form">
    <div class="product-form__heading">
        <div class="product-form__heading-title">商品一覧</div>
        <a class="product-form__heading-btn" href="/products/register">+商品を追加</a>
    </div>
    <div class="product-form__inner">
        <div class="product-form__search">
            <form class="product-form__form">
                <div class="product-form__search-inner">
                    <input
                        class="product-form__search-text"
                        type="text"
                        name="name"
                        id="name"
                        placeholder="商品名を入力" />
                    <br />
                    <input
                        class="product-form__search-btn"
                        type="submit"
                        value="検索" />
                </div>
            </form>
            <div class="product-form__search-title">
                <h3>価格順で表示</h3>
                <select
                    class="product-form__search-input"
                    name="price"
                    id="price">
                    <option value="価格で並べ替え" selected>価格で並べ替え</option>
                    <option value="高い順">高い順</option>
                    <option value="低い順">低い順</option>
                </select>
            </div>
        </div>
        <div class="product-form__content">
            <div class="product-form__content-item">
                <img
                    class="content_img"
                    src="img/kiwi.png"
                    alt="kiwi"
                    width="350"
                    height="250" />
                <div class="content-text">
                    <div class="content_name">キウイ</div>
                    <div class="content_price">&yen800</div>
                </div>
            </div>
            <div class="product-form__content-item">
                <img
                    class="content_img"
                    src="img/banana.png"
                    alt="バナナ"
                    width="350"
                    height="250" />
                <div class="content-text">
                    <div class="content_name">バナナ</div>
                    <div class="content_price">&yen800</div>
                </div>
            </div>
            <div class="product-form__content-item">
                <img
                    class="content_img"
                    src="img/melon.png"
                    alt="メロン"
                    width="350"
                    height="250" />
                <div class="content-text">
                    <div class="content_name">メロン</div>
                    <div class="content_price">&yen800</div>
                </div>
            </div>
            <div class="product-form__content-item">
                <img
                    class="content_img"
                    src="img/orange.png"
                    alt="オレンジ"
                    width="350"
                    height="250" />
                <div class="content-text">
                    <div class="content_name">オレンジ</div>
                    <div class="content_price">&yen800</div>
                </div>
            </div>
            <div class="product-form__content-item">
                <img
                    class="content_img"
                    src="img/pineapple.png"
                    alt="パイナップル"
                    width="350"
                    height="250" />
                <div class="content-text">
                    <div class="content_name">パイナップル</div>
                    <div class="content_price">&yen800</div>
                </div>
            </div>
            <div class="product-form__content-item">
                <img
                    class="content_img"
                    src="img/strawberry.png"
                    alt="いちご"
                    width="350"
                    height="250" />
                <div class="content-text">
                    <div class="content_name">いちご</div>
                    <div class="content_price">&yen800</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection