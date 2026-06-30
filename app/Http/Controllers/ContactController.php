<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('contact.index', compact('categories', 'tags'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function confirm(StoreContactRequest $request)
    {
        $validated = $request->all();

        $category = Category::find($request->category_id);

        $tags = Tag::find($request->tag_ids);


        return view('contact.confirm', compact('validated', 'category', 'tags'));

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->validated());
        $contact->tags()->attach($request->tag_ids);

        return redirect()->route('contact.thanks')->with('success', '正常に送信されました');

        //
    }

    /**
     * Display the specified resource.
     */
    public function thanks()
    {
        return view('contact.thanks');
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
