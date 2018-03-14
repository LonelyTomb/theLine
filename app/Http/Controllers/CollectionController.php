<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CollectionController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	/**
	 * Display a listing of the resource.
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$collections = Collection::all();
		return view('admin.collections.index', compact('collections'));
	}

	/**
	 * Show the form for creating a new resource.
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.collections.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validatedData = $request->validate([
			'name' => 'required|min:3|unique:collections',
			'status' => 'required',
			'imageLink' => 'required|file|mimes:jpeg,png,jpg'
		]);
		$collection = Collection::create([
			'name' => $request->name,
			'description' => $request->description,
			'status' => $request->status
		]);
		if ($request->file('imageLink')->isValid()) {
			Storage::makeDirectory("public/uploads/{$collection->id}");
			$filename = "{$request->name}.{$request->imageLink->extension()}";
			$request->file('imageLink')->storeAs("public/uploads/{$collection->id}", $filename);
			$collection->image_link = "storage/uploads/{$collection->id}/{$filename}";
			$collection->save();
		}
		return view('admin.collections.create');
	}

	/**
	 * Display the specified resource.
	 * @param  \App\Models\Collection $collection
	 * @return \Illuminate\Http\Response
	 */
	public function show(Collection $collection)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 * @param  \App\Models\Collection $collection
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Collection $collection)
	{
		return view('admin.collections.edit', compact('collection'));
	}

	/**
	 * Update the specified resource in storage.
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Models\Collection $collection
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Collection $collection)
	{
		$collection->name = $request->name;
		$collection->description = $request->description;
		$collection->status = $request->status;
		if ($request->has('imageLink')) {
			$filename = "{$request->name}.{$request->imageLink->extension()}";
			$request->file('imageLink')->storeAs("public/uploads/{$collection->id}", $filename);
			$collection->image_link = "storage/uploads/{$collection->id}/{$filename}";
		}
		$collection->save();
		return redirect()->route('collection.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * @param  \App\Models\Collection $collection
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Collection $collection)
	{
		//
	}
}
