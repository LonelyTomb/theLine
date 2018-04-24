<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Collection;
use Illuminate\Http\Request;

class ProductController extends Controller
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
		$products = Product::all();
		return view('admin.products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$collections = Collection::all();
		return view('admin.products.create', compact('collections'));
	}

	public function uploadImage($request, $product)
	{
		$filename = "{$request->name}.{$request->imageLink->extension()}";
		$request->file('imageLink')->storeAs("public/uploads/{$request->collection}", $filename);
		$product->image_link = "storage/uploads/{$request->collection}/{$filename}";
		$product->save();
	}

	/**
	 * Store a newly created resource in storage.
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validatedData = $request->validate([
			'name' => 'required|min:3|unique:products',
			'collection' => 'required',
			'description' => 'nullable',
			'price' => 'required',
			'units_total' => 'required',
			'status' => 'required',
			'imageLink' => 'required|file|mimes:jpeg,png,jpg'
		]);

		$product = Product::create([
			'name' => $request->name,
			'collection_id' => $request->collection,
			'price' => $request->price,
			'status' => $request->status,
			'description' => $request->description,
			'units_total' => $request->units_total,
			'units_remaining' => $request->units_total,
			'imageLink' => $request->imageLink,
		]);

		if ($request->file('imageLink')->isValid()) {
			$this->uploadImage($request, $product);
		}
		return view('admin.product.index');
	}

	/**
	 * Display the specified resource.
	 * @param  \App\Models\Product $product
	 * @return \Illuminate\Http\Response
	 */
	public function show(Product $product)
	{
		return view('admin.products.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * @param  \App\Models\Product $product
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Product $product)
	{
		return view('admin.products.edit', compact('product'));
	}

	/**
	 * Update the specified resource in storage.
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Models\Product $product
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Product $product)
	{
//		$validatedData = $request->validate([
//			'name' => 'required|min:3|unique:products',
//			'collection' => 'required',
//			'description' => 'nullable',
//			'price' => 'required',
//			'units_total' => 'required',
//			'update_units_remaining' => 'required',
//			'status' => 'required',
//			'imageLink' => 'nullable|file|mimes:jpeg,png,jpg'
//		]);

		$imageLink = $request->imageLink ?? $product->image_link;
		$product->update([
			'name' => $request->name,
			'collection_id' => $product->collection->id,
			'price' => $request->price,
			'status' => $request->status,
			'description' => $request->description,
			'units_total' => $request->units_total,
			'units_remaining' => $request->update_units_remaining,
			'imageLink' => $imageLink,
		]);

		return $this->index();
	}

	/**
	 * Remove the specified resource from storage.
	 * @param  \App\Models\Product $product
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Product $product)
	{
		//
	}
}
