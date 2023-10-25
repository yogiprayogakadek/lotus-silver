<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('admin.product.index', compact('data'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(ProductRequest $request)
    {
        try {
            $data = [
                'name' => $request->name,
                'slug' => $request->slug,
                'description' => $request->description,
                'detail' => $request->detail,
                'price' => preg_replace('/[Rp. ]/', '', $request->price),
            ];

            if ($request->has('photo')) {
                //get filename with extension
                $filenamewithextension = $request->file('photo')->getClientOriginalName();

                //get file extension
                $extension = $request->file('photo')->getClientOriginalExtension();

                //filename to store
                $filenametostore = $request->name . '-' . time() . '.' . $extension;
                $save_path = 'assets/uploads/media/product';

                if (!file_exists($save_path)) {
                    mkdir($save_path, 666, true);
                }

                $photo = Image::make($request->file('photo')->path());
                $photo->resize(700, 700, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($save_path . '/' . $filenametostore);
                $data['photo'] = $save_path . '/' . $filenametostore;
            }

            Product::create($data);

            return redirect()->route('product.index')->with([
                'status' => 'success',
                'message' => 'Data created successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->route('product.index')->with([
                'status' => 'error',
                'message' => $e->getMessage(),
                // 'message' => 'Whoops, looks like something went wrong...',
                'title' => 'Error'
            ]);
        }
    }

    public function edit($id)
    {
        $data = Product::find($id);
        return view('admin.product.edit', compact('data'));
    }

    public function update(ProductUpdateRequest $request)
    {
        try {
            $product = Product::find($request->id_product);
            $data = [
                'name' => $request->name,
                'slug' => $request->slug,
                'description' => $request->description,
                'detail' => $request->detail,
                'price' => preg_replace('/[Rp. ]/', '', $request->price),
            ];

            if ($request->has('photo')) {
                unlink($product->photo);
                //get filename with extension
                $filenamewithextension = $request->file('photo')->getClientOriginalName();

                //get file extension
                $extension = $request->file('photo')->getClientOriginalExtension();

                //filename to store
                $filenametostore = $request->name . '-' . time() . '.' . $extension;
                $save_path = 'assets/uploads/media/product';

                if (!file_exists($save_path)) {
                    mkdir($save_path, 666, true);
                }

                $photo = Image::make($request->file('photo')->path());
                $photo->resize(700, 700, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($save_path . '/' . $filenametostore);
                $data['photo'] = $save_path . '/' . $filenametostore;
            }

            $product->update($data);

            return redirect()->route('product.index')->with([
                'status' => 'success',
                'message' => 'Data successfully updated!'
            ]);
        } catch (\Exception $e) {
            return redirect()->route('product.index')->with([
                'status' => 'error',
                'message' => $e->getMessage(),
                // 'message' => 'Whoops, looks like something went wrong...',
                'title' => 'Error'
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $product = Product::find($id);
            unlink($product->photo);
            $product->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Data successfully deleted!',
                'title' => 'Success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                // 'message' => 'Whoops, looks like something went wrong...',
                'title' => 'Error'
            ]);
        }
    }
}
