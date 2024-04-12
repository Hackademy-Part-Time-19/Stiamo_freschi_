<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function indexByCategory($id)
    {
        $categories = Category::all();
        $thisCategory = Category::find($id)->name;
        return view('search-bycategory', ['announcements' => Announcement::where('category_id', $id)->where('is_accepted', true)->get(), 'categories' => $categories, 'thisCategory' => $thisCategory]);
    }

    public function searchAnnouncements(Request $request)
    {
        /* dd($request->all());  */
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->get();
        /*   dd($announcements); */
        $categories = Category::all();
        return view('homepage', compact('announcements', 'categories'));
    }
    
    public function show(Announcement $announcement)
    {   
        $announcementOfCategory = Announcement::where('category_id', $announcement->category_id)->where('id', '!=', $announcement->id)->where('is_accepted', true)->get();
        $categoryAnnouncements = $announcement->category->name;
        $categories = Category::all();
        $announcementShow = $announcement;
        return view('announcement-show', compact('announcementShow', 'categories', 'announcementOfCategory', 'categoryAnnouncements' ));
    }


}
