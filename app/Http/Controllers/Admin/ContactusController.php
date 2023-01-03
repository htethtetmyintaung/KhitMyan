<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Maincontents;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\ContactUsRequest;

class ContactusController extends Controller
{
    Public function index()
    {
        $contents = ContactUs::all();
        return view('admin.Contactus.index',compact('contents'));
    }

    Public function create()
    {
        $main_contents = Maincontents::all();
        return view('admin.Contactus.create',compact('main_contents'));
    }

    Public function store(ContactUsRequest $request)
    {
        $data = $request->validated();
        $content = new ContactUs;
        $content->main_content_id = $data['main_content_id'];
        $content->title_en = $data['title_en'];
        $content->title_my = $data['title_my'];
        $content->title_ja = $data['title_ja'];
        $content->address_en = $data['address_en'];
        $content->address_my = $data['address_my'];
        $content->address_ja = $data['address_ja'];
        $content->phone = $data['phone'];
        $content->email = $data['email'];
        $content->map = $data['map'];
        $content->created_by = Auth::user()->id;
        $content->save();

        return redirect('admin/Contactus/index')->with('message','Contact Us Content Added Successfully');
    }

    Public function edit($content_id)
    {
        $contents = ContactUs::find($content_id);
        return view('admin.Contactus.edit',compact('contents'));
    }

    Public function update(ContactUsRequest $request,$content_id)
    {
        $data = $request->validated();
        $content = ContactUs::find($content_id);
        $content->title_en = $data['title_en'];
        $content->title_my = $data['title_my'];
        $content->title_ja = $data['title_ja'];
        $content->address_en = $data['address_en'];
        $content->address_my = $data['address_my'];
        $content->address_ja = $data['address_ja'];
        $content->phone = $data['phone'];
        $content->email = $data['email'];
        $content->map = $data['map'];
        $content->created_by = Auth::user()->id;
        $content->update();

        return redirect('admin/Contactus/index')->with('message','Contact Us Content Updated Successfully');   
    }

    Public function destroy($content_id)
    {
        $content = ContactUs::find($content_id);
        if ($content) 
        {
            $content->delete();
            return redirect('admin/Contactus/index')->with('message','About Us Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Contactus/index')->with('message','No About Us Content Id Found');
        }
    }
}
