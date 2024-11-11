@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/detail.css')}}">
@endsection

@section('content')
<div class="detail-form">
    <form class="detail-form__form">
        <div class="item-img">
            <div class="item_img-inner">
                <input class="item_img-inner-img" type="file" name="image" />
                <p class="detail-form__error-message">
                    <!--error message決定後記述-->
                </p>
            </div>
        </div>
        <div class="item-input">
            <div class="detail-form__group">
                <label class="detail-form__label" for="name">商品名</label>
                <div class="detail-form__input">
                    <input
                        class="detail-form__input-inner"
                        type="text"
                        name="name"
                        id="name"
                        placeholder="商品名を入力" />
                    <p class="detail-form__error-message">
                        <!--error message決定後記述-->
                    </p>
                </div>
            </div>
            <div class="detail-form__group">
                <label class="detail-form__label" for="plice">値段</label>
                <div class="detail-form__input">
                    <input
                        class="detail-form__input-inner"
                        type="text"
                        name="price"
                        id="price"
                        placeholder="値段を入力" />
                    <p class="detail-form__error-message">
                        <!--error message決定後記述-->
                    </p>
                </div>
            </div>
            <div class="detail-form__group">
                <label class="detail-form__label" for="season">季節</label>
                <div class="detail-form__input">
                    <input
                        class="detail-form__input-radio"
                        type="radio"
                        name="season" />春
                    <input
                        class="detail-form__input-radio"
                        type="radio"
                        name="season" />夏
                    <input
                        class="detail-form__input-radio"
                        type="radio"
                        name="season" />秋
                    <input
                        class="detail-form__input-radio"
                        type="radio"
                        name="season" />冬
                    <p class="detail-form__error-message">
                        <!--error message決定後記述-->
                    </p>
                </div>
            </div>
        </div>
        <div class="item-description">
            <div class="detail-form__group">
                <label class="detail-form__label" for="description">商品説明</label>
                <div class="detail-form__input">
                    <textarea
                        class="detail-form__description"
                        name="description"
                        id="description"
                        placeholder="商品の説明を入力"></textarea>
                    <p class="detail-form__error-message">
                        <!--error message決定後記述-->
                    </p>
                </div>
            </div>
            <div class="detail-form__btn">
                <input
                    class="detail-form__btn-return"
                    type="submit"
                    value="戻る" />
                <input
                    class="detail-form__btn-update"
                    type="submit"
                    value="変更を保存" />
            </div>
        </div>
    </form>
</div>
@endsection