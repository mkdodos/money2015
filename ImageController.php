<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Image;

class ImageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('image');
	}

	public function save(Request $request)
  {
     // $request->validate([
     //      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     // ]);
     //

  	// $this->validate($request, [
  	//         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
  	//     ]);

  	//檔案重新命名移動到指定位置
     if ($files = $request->file('image')) {
         $destinationPath = 'public/image/'; // upload path
         $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
         $files->move($destinationPath, $profileImage);
         $insert['image'] = "$profileImage";
      }
      $check = Image::insertGetId($insert);

      return redirect("image")
      ->withSuccess('成功上傳!');

  }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
