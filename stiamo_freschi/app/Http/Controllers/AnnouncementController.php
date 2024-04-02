<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function indexByCategory($id)
    {
        $categories= Category::all();
        
        return view('search-bycategory', ['announcements' => Announcement::where('category_id', $id)->where('is_accepted', true)->get(),'categories'=> $categories]);
    }

    public function searchAnnouncements(Request $request)
    {
         /* dd($request->all());  */
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->get();
      /*   dd($announcements); */
        $categories = Category::all();
        return view('homepage', compact('announcements', 'categories'));
    }






    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Announcement $announcement)
    {
        $categoryAnnouncements = $announcement->category->announcements;
        $categories = Category::all();
        

        return view('announcement-show', ['announcement' => $announcement, 'categoryAnnouncements' => $categoryAnnouncements], compact('categories'));

    }






    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}