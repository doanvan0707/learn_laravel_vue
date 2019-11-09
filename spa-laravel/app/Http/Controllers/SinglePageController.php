<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileUpload;

class SinglePageController extends Controller
{
    public function index() 
    {
        return view('app');
    }

    public function store(Request $request)
    {
        if ($request->get('image'))
        {
            $image = $request->get('image');
            $name = time().'.'. explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            \Image::make($request->get('umage'))->save(public_path('images/').$name);
        }

        $image = new FileUpload();
        $image->image_name = $name;
        $image->save();

        return response()->json(['success' => 'You have successfully uploaded an image'], 200);
    }

    public function testAxios() 
    {
        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);
    }
}
