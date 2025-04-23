<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
 use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
  public function index(Request $request)
  {
    $categories = Category::all();
    return view('index', compact('categories'));
  }

  public function confirm(ContactRequest $request)
  {
        $data = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'category_id', 'detail']);
        $full_name = $data['first_name'] . ' ' . $data['last_name'];

        if ($data['gender'] === '1') {
            $genderText = '男性';
        } elseif ($data['gender'] === '2') {
            $genderText = '女性';
        } elseif ($data['gender'] === '3') {
            $genderText = 'その他';
        } else {
            $genderText = '不明';
        }

        $tel = $data['tel1'] . $data['tel2'] . $data['tel3'];

        $category = Category::find($data['category_id']);
        $categoryName = $category ? $category->content : '不明';

        return view('confirm', compact('data', 'full_name', 'genderText', 'tel', 'categoryName'));
  }

  public function thanks(Request $request)
  {
        Contact::create([
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'address' => $request->input('address'),
            'building' => $request->input('building'),
            'category_id' => $request->input('category_id'), 
            'detail' => $request->input('detail'),
        ]);

        return view('thanks');
  }
}
