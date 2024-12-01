<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Menu; // اطمینان حاصل کنید که مدل Menu را ایجاد کرده‌اید
use File;
class MenuController extends Controller
{
    // نمایش فهرست منوها
    public function index()
    {
        $menus = Menu::all(); // تمام رکوردهای منو را دریافت می‌کند
        return view('menu', compact('menus'));
    }

    // ذخیره کردن اطلاعات منو
    public function store(Request $request)
    {
        $request->validate([
            'stext' => 'required|string',
            'enstext' => 'nullable|string',
            'text' => 'nullable|string',
            'link' => 'nullable|url',
            'enlink' => 'nullable|url',
            'icon' => 'nullable|string',
            'tf' => 'nullable|boolean',
            'pic' => 'nullable|image|mimes:png,jpg,jpeg|max:200',
        ]);

        $menu = new Menu();
        $menu->stext = $request->stext;
        $menu->enstext = $request->enstext;
        $menu->text = $request->text;
        $menu->link = $request->link;
        $menu->enlink = $request->enlink;
        $menu->icon = $request->icon;
        $menu->tf = $request->has('tf') ? 1 : 0;

        // ذخیره تصویر
        if ($request->hasFile('pic')) {
            $imagePath = $request->file('pic')->store('menupics', 'public');
            $menu->pic = $imagePath;
        }

        $menu->save();

        return redirect()->route('menu.index');
    }

    // ویرایش منو
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menu.edit', compact('menu'));
    }

    // بروزرسانی منو
    public function update(Request $request, $id)
    {
        $request->validate([
            'stext' => 'required|string',
            'enstext' => 'nullable|string',
            'text' => 'nullable|string',
            'link' => 'nullable|url',
            'enlink' => 'nullable|url',
            'icon' => 'nullable|string',
            'tf' => 'nullable|boolean',
            'pic' => 'nullable|image|mimes:png,jpg,jpeg|max:200',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->stext = $request->stext;
        $menu->enstext = $request->enstext;
        $menu->text = $request->text;
        $menu->link = $request->link;
        $menu->enlink = $request->enlink;
        $menu->icon = $request->icon;
        $menu->tf = $request->has('tf') ? 1 : 0;

        // بروزرسانی تصویر
        if ($request->hasFile('pic')) {
            // حذف تصویر قبلی اگر موجود باشد
            if ($menu->pic) {
                File::delete(storage_path('app/public/' . $menu->pic));
            }
            $imagePath = $request->file('pic')->store('menupics', 'public');
            $menu->pic = $imagePath;
        }

        $menu->save();

        return redirect()->route('menu.index');
    }

    // حذف منو
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        // حذف تصویر مربوطه
        if ($menu->pic) {
            File::delete(storage_path('app/public/' . $menu->pic));
        }
        $menu->delete();
        return redirect()->route('menu.index');
    }

    // آپلود تصویر
    public function uploadImage(Request $request, $id)
    {
        if ($request->hasFile('pic')) {
            $imagePath = $request->file('pic')->store('menupics', 'public');
            $menu = Menu::findOrFail($id);
            $menu->pic = $imagePath;
            $menu->save();
        }
        return back();
    }
}
