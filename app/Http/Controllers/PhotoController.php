<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $options = [
        'cars'       =>  'Cars',
        'computers'  =>  'Computers',
        'cats'       =>  'Cats'
      ];

    public function index($cat)
    {
        if (isset($cat)) {
          $dir = 'storage/' . $cat;
          $data = array(
            'dir'    =>    $dir,
            'files'  =>    array_diff(scandir($dir), array('..', '.'))
          );
          return view('pages.index')->with($data, $this->options);
        } else {
          return '<h1>Nothing to display</h1>';
        }
    }

    public function add()
    {
      return view('pages.add')->with('options', $this->options);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dir = $request->dir;
        $files = $request->file('photo');
        if (!empty($files)) {
          foreach ($files as $key => $file) {
            // Get full filename
            $fileNameWithExt = $file->getClientOriginalName();
            // // Get file name without extension
            // $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // // Get extension
            // $fileExt = $file->getClientOriginalExtension();
            // // Create new filename
            // $fileNameToStore = $dir . '_' . time() . '_' . $key . '.' . $fileExt;
            // // return $dir;
            $path = $file->storeAs('public/' . $dir . '/', $fileNameWithExt);
          }
        }
        return redirect('/' . $dir)->with('success', 'Images Uploaded');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
