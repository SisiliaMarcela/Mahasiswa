<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\mahasiswax;
use Illuminate\Http\Request;

class mahasiswaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $mahasiswax = mahasiswax::where('studentID', 'LIKE', "%$keyword%")
                ->orWhere('nama', 'LIKE', "%$keyword%")
                ->orWhere('jurusan', 'LIKE', "%$keyword%")
                ->orWhere('tahun_masuk', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mahasiswax = mahasiswax::latest()->paginate($perPage);
        }

        return view('admin.mahasiswax.index', compact('mahasiswax'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.mahasiswax.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        mahasiswax::create($requestData);

        return redirect('admin/mahasiswax')->with('flash_message', 'mahasiswax added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $mahasiswax = mahasiswax::findOrFail($id);

        return view('admin.mahasiswax.show', compact('mahasiswax'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $mahasiswax = mahasiswax::findOrFail($id);

        return view('admin.mahasiswax.edit', compact('mahasiswax'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $mahasiswax = mahasiswax::findOrFail($id);
        $mahasiswax->update($requestData);

        return redirect('admin/mahasiswax')->with('flash_message', 'mahasiswax updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        mahasiswax::destroy($id);

        return redirect('admin/mahasiswax')->with('flash_message', 'mahasiswax deleted!');
    }
}
