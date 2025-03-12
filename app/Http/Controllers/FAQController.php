<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        return view('faq.index', [
            'faqs' => FAQ::all()
        ]);
    }

    /**
     * Show the form for creating a new Task.
     */
    public function create()
    {
        return view('faq.create');
    }

    /**
     * Store a newly created Task in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq = FAQ::create($validated);

        return redirect()->route('faq.index')->with('success', "FAQ $faq->id created successfully.");
    }
}
