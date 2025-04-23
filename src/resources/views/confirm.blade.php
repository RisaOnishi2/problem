@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
  <div class="confirm__heading">
    <h2>Confirm</h2>
  </div>
  <form class="form" action="/thanks" method="post">
    @csrf
    <div class="confirm-table">
      <table class="confirm-table__inner">
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お名前</th>
          <td class="confirm-table__text">
            {{ $full_name }}
            <input type="hidden" name="last_name" value="{{ $data['last_name'] }}">
            <input type="hidden" name="first_name" value="{{ $data['first_name'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">性別</th>
          <td class="confirm-table__text">
            {{ $genderText }}
            <input type="hidden" name="gender" value="{{ $data['gender'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">メールアドレス</th>
          <td class="confirm-table__text">
            {{ $data['email']}}
            <input type="hidden" name="email" value="{{ $data['email'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">電話番号</th>
          <td class="confirm-table__text">
            {{ $tel }}
            <input type="hidden" name="tel" value="{{ $tel }}">
          </td>
        </tr>
         <tr class="confirm-table__row">
          <th class="confirm-table__header">住所</th>
          <td class="confirm-table__text">
            {{ $data['address'] }}
            <input type="hidden" name="address" value="{{ $data['address'] }}">
          </td>
          <tr class="confirm-table__row">
          <th class="confirm-table__header">建物</th>
          <td class="confirm-table__text">
            {{ $data['building'] }}
            <input type="hidden" name="building" value="{{ $data['building'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせの種類</th>
          <td class="confirm-table__text">
            {{ $categoryName }}
          <input type="hidden" name="category_id" value="{{ $data['category_id'] }}">
          </td>
        </tr>
        <tr class="confirm-table__row">
          <th class="confirm-table__header">お問い合わせ内容</th>
          <td class="confirm-table__text">
            {{ $data['detail'] }}
            <input type="hidden" name="detail" value="{{ $data['detail'] }}">
          </td>
        </tr>
      </table>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
  </form>
  <form action="/" method="get">
    <button type="submit">修正</button>
  </form>
</div>
@endsection
