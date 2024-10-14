<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Admin;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    public function index(AdminRequest $request)
    {
        $contacts = Contact::all();
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories'));
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('category')->CategorySearch($request->category_id)->GenderSearch($request->gender)->DateSearch($request->created_at)->KeywordSearch($request->keyword)->get();
        $categories = Category::all();
        return view('admin', compact('contacts', 'categories'));
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('admin');
    }

    // public function create(AdminRequest $request)
    // {
    //     $users = $request->all();
    //     Admin::create($users);
    //     return view('login');
    // }
}
