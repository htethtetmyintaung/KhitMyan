<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\ClientRequest;
use App\Http\Requests\Admin\UpdateClientRequest;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    Public function index(Request $request)
    {
        $keyword = $request->keyword;
        $contents = Client::where(function($query) use ($keyword)
        {
            if ($keyword !=null) {
                $query->where('name_en','LIKE','%'.$keyword.'%')
                        ->orWhere('name_my','LIKE','%'.$keyword.'%')
                        ->orWhere('name_ja','LIKE','%'.$keyword.'%')
                        ->get();
            }
        })->paginate(5);
        return view('admin.Client.index',compact('contents'));
    }

    Public function create()
    {
        $services = Service::all();
        return view('admin.Client.create',compact('services'));
    }

    Public function store(ClientRequest $request)
    {
        $data = $request->validated();
        $client = new Client;
        $client->service_id = $data['service_id'];
        $client->name_en = $data['name_en'];
        $client->name_my = $data['name_my'];
        $client->name_ja = $data['name_ja'];
        $client->description_en = $data['description_en'];
        $client->description_my = $data['description_my'];
        $client->description_ja = $data['description_ja'];
        $client->link = $data['link'];

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/client/', $filename);
            $client->image = $filename;
        }
        

        $client->created_by = Auth::user()->id;
        $client->save();

        return redirect('admin/Client/index')->with('message','Client Added Successfully');
    }

    Public function edit($content_id)
    {
        $client = Client::find($content_id);
        return view('admin.Client.edit', compact('client'));
    }

    Public function update(UpdateClientRequest $request, $content_id)
    {
        $data = $request->validated();
        $client = Client::find($content_id);
        $client->name_en = $data['name_en'];
        $client->name_my = $data['name_my'];
        $client->name_ja = $data['name_ja'];
        $client->description_en = $data['description_en'];
        $client->description_my = $data['description_my'];
        $client->description_ja = $data['description_ja'];
        $client->link = $data['link'];

        if($request->hasfile('image')) {
            
            $destination = 'uploads/client/'.$client->image;
            if(File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/client/', $filename);
            $client->image = $filename;

        }

        $client->created_by = Auth::user()->id;
        $client->update();

        return redirect('admin/Client/index')->with('message','Client Updated Successfully');

    }

    Public function destroy($content_id)
    {
        $client = Client::find($content_id);
        if ($client) 
        {
            $client->delete();
            return redirect('admin/Client/index')->with('message','Client Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Client/index')->with('message','No Client Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $client = Client::find($content_id);
        return view('admin.Client.view',compact('client'));
    }

}
