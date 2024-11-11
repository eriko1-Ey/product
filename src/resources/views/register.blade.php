@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')
<div class="register-form">
    <h2 class="register-form__heading">商品登録</h2>
    <div class="register-form__inner">
        <form class="register-form__form">
            <div class="register-form__group">
                <label class="register-form__label" for="name">商品名</label>
                <span class="register-form__label-span">必須</span>
                <div class="register-form__input">
                    <input
                        class="register-form__input-inner"
                        type="text"
                        name="name"
                        id="name"
                        placeholder="商品名を入力" />
                    <p class="register-form__error-message">
                        <!--error message決定後記述-->
                    </p>
                </div>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="plice">値段</label>
                <span class="register-form__label-span">必須</span>
                <div class="register-form__input">
                    <input
                        class="register-form__input-inner"
                        type="text"
                        name="price"
                        id="price"
                        placeholder="値段を入力" />
                    <p class="register-form__error-message">
                        <!--error message決定後記述-->
                    </p>
                </div>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="image">商品画像</label>
                <span class="register-form__label-span">必須</span>
                <div class="register-form__input">
                    <input
                        slass="resister-form__input-img"
                        type="file"
                        name="image" />
                    <p class="register-form__error-message">
                        <!--error message決定後記述-->
                    </p>
                </div>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="season">季節</label>
                <span class="register-form__label-span">必須</span>
                <span class="register-form__label-note">複数選択可</span>
                <div class="register-form__input">
                    <input
                        class="register-form__input-radio"
                        type="radio"
                        name="season" />春
                    <input
                        class="register-form__input-radio"
                        type="radio"
                        name="season" />夏
                    <input
                        class="register-form__input-radio"
                        type="radio"
                        name="season" />秋
                    <input
                        class="register-form__input-radio"
                        type="radio"
                        name="season" />冬
                    <p class="register-form__error-message">
                        <!--error message決定後記述-->
                    </p>
                </div>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="description">商品説明</label>
                <span class="register-form__label-span">必須</span>
                <div class="register-form__input">
                    <textarea
                        class="register-form__description"
                        name="description"
                        id="description"
                        placeholder="商品の説明を入力"></textarea>
                    <p class="register-form__error-message">
                        <!--error message決定後記述-->
                    </p>
                </div>
            </div>
            <div class="register-form__btn">
                <input
                    class="register-form__btn-return"
                    type="submit"
                    value="戻る" />
                <input
                    class="register-form__btn-register"
                    type="submit"
                    value="登録" />
            </div>
        </form>
    </div>
</div>
@endsection