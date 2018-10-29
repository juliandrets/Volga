<?php

namespace App\Http\Controllers;

use App\Reel;
use Illuminate\Http\Request;

class ReelController extends Controller
{
    
    public function index()
    {
        $reel           = Reel::orderBy('id','desc')->get();
        return view('reel', [
            'reel'          => $reel
        ]);
    }

    
    public function create()
    {
        return view('admin-reel-create');
    }

    
    public function store(Request $request)
    {
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/reel/');
            $image->move($destinationPath, $name);
        } else {
            $name = 'nophoto.jpg';
        }

        $reel = new Reel([
            'name'          => $request->input('name'),
            'description'   => $request->input('description'),
            'category'      => $request->input('category'),
            'iframe'        => $request->input('iframe'),
            'picture'       => $name
        ]);

        $reel->save();

        return redirect('admin');
    }

    
    public function show(Reel $reel)
    {
        //
    }

    
    public function edit($id)
    {
        $reel = Reel::find($id);
        return view('admin-reel-edit', ['reel' => $reel]);
    }

    
    public function update(Request $request, $id)
    {
        // si hay un request de una imagen, la subo y actualizo
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/reel/');
            $image->move($destinationPath, $name);

            Reel::find($id)->update([
                'name'          => $request->input('name'),
                'category'      => $request->input('category'),
                'description'   => $request->input('description'),
                'iframe'        => $request->input('iframe'),
                'picture'       => $name
            ]);

            return redirect('admin');
        } else {
            // si no hay un request de una imagen, actualizo sin tocar el campo de imagen
            Reel::find($id)->update([
                'name'          => $request->input('name'),
                'category'      => $request->input('category'),
                'iframe'        => $request->input('iframe'),
                'description'   => $request->input('description')
            ]);

            return redirect('admin');
        }

        
    }

    
    public function destroy($id)
    {
        $reel = Reel::find($id);
        $reel->delete();
        return redirect('admin');//
    }
}
