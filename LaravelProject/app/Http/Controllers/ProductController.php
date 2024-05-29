<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getProducts()
    {
        $products=ProductModel::all();
        return view('admin.product.getProducts',['products'=>$products]);
    } 
    function getProductsbyBand(Request $request)
    {
        $band = $request->input('selectBand');
        $products = ProductModel::where('band',$band)->get();
        return view('admin.product.getProductsByBand', ['products' => $products]);
    }
    function forminsertProduct(){//lay form de nhanp lieu
        return view('admin.product.insertProduct');
    }
    function insertProduct(Request $request){
        $product = new ProductModel;
        $product ->pid = $request ->id;
        $product ->pname = $request ->pname;
        $product ->company = $request ->company;
        $product ->band = $request ->selectBand;
        $product ->year = $request ->selectYear;
        if (isset($_FILES['imageFile']) && $_FILES['imageFile']['error']=== UPLOAD_ERR_OK){
            $pimage = 'data:image/png;base64,' 
                .base64_encode(file_get_contents($_FILES['imageFile']['tmp_name']));
            $product->pimage = $pimage;

        }
        $product->save();
        return redirect('admin/product/insertProduct')
        ->with("Note","Thêm thành công!");
    }
    function deleteProduct($pid){
        $product = ProductModel::where('pid',$pid)->first();
        $product->delete();
        return redirect('admin/product/getProducts')
        ->with("Note","Xóa thành công!");
    }
}
