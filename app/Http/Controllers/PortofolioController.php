<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
   public function index()
    {

        $portofolios = Portofolio::all();
        return view('admin.portofolio.index', compact('portofolios'));
    }

    function create()
    {
        return view('admin.portofolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'shortdesc' => 'required|string',
            'longdesc' => 'required|string',
            'difficulty' => 'required|string|max:100',
            'status' => 'required',
            'link_app' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


    // Create new portofolio instance and populate with validated data
            $portofolio = new Portofolio();
            $portofolio->judul = $request->judul;
            $portofolio->shortdesc = $request->shortdesc;
            $portofolio->longdesc = $request->longdesc;
            $portofolio->difficulty = $request->difficulty;
            $portofolio->status = $request->status;
            $portofolio->link_app = $request->link_app;

            // Handle image upload
            if ($request->hasFile('image')) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $portofolio->image = $imageName;
            }

            $portofolio->save();

            return redirect()->route('portofolio.index')->with('success', 'Portofolio created successfully.');


        }


}
