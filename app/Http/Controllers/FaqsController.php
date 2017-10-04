<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('faqs.create');
    }

    public function store(Request $request){
        // Upload Photo
        $faq = new Faq;
        $faq->title = $request->input('title');
        $faq->description = $request->input('description');
        $faq->save();
        return redirect('/faqs')->with('success', 'Resposta Inserida Com Sucesso!');
      }
}
