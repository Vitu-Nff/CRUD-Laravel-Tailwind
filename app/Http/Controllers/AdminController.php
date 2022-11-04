<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.index',compact('products'));
    }

    public function edit($productId = null) {
        if(is_null($productId)) {
            return redirect()->route('admin.add');
        }
        else {
            $item = Product::find($productId);
            return view('admin.edit', compact('item'));
        }
    }

    public function add($status = null)
    {
        $success = $status;
        return view('admin.add', ['success' => $success,]);
    }

    public function addProduct(Request $request)
    {
       $input = $request->validate([
           'name'=> 'required|string',
           'description'=>'nullable|string',
           'price' => 'required|string',
           'stock'=>'nullable|string',
           'photo'=>'required|file',
       ]);

       if($input['stock'] == null) {
           $input['stock'] = 1;
       }
        if($input['description'] == null) {
            $input['description'] = 'Aproveite nossas novidades! Produto já disponível para envio para todo o Brasil. Dúvidas? Entre em contato através de nossa central, ou através de @mindtec nas redes sociais!';
        }

        // Transforma o arquivo em seu endereço no servidor antes de salvar no banco de dados
        $file = $input['photo'];
        $path = $file->store('products', 'public');
        $path = Storage::disk('public')->url($path);
        $input['photo'] = $path;
        $input['thumbnail'] = $path;

        Product::create($input);

        return Redirect::route('admin.add', 'success');
    }

    public function delete($productId = null)
    {
        if (!is_null($productId)) {
            DB::table('products')->where('id', '=' , $productId)->delete();
            return redirect()->route('admin.index');
        } else {
            return view('admin.index');
        }
    }

    public function saveProduct(Request $request)
    {
        $input = $request->validate([
            'name'=> 'required|string',
            'description'=>'nullable|string',
            'price' => 'required|string',
            'stock'=>'nullable|string',
            'photo'=>'nullable|file',
            'id'=>'required',
        ]);

        if($input['stock'] == null) {
            $input['stock'] = 0;
        }

        if($input['description'] == null) {
            $input['description'] = 'Aproveite nossas novidades! Produto já disponível para envio para todo o Brasil. Dúvidas? Entre em contato através de nossa central, ou através de @mindtec nas redes sociais!';
        }

        if(isset($input['photo'])) {
            $file = $input['photo'];
            $path = $file->store('products', 'public');
            $path = Storage::disk('public')->url($path);
            $input['photo'] = $path;
            $input['thumbnail'] = $path;
        }
        else {
            $product =
                DB::table('products')
                ->where("id", "=", $input['id'])
                    ->get();

            $product = $product[0];

            $input['photo'] = $product->photo;
        }


        DB::table('products')
            ->where("id", "=", $input['id'])
            ->update([
                'name' => $input['name'],
                'description'=>$input['description'],
                'price' => $input['price'],
                'stock'=> $input['stock'],
                'thumbnail'=>$input['photo'],
                'photo'=> $input['photo']]);


        return Redirect::route('admin.add', 'success');
    }


}
