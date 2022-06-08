<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use Illuminate\Http\Request;
use App\Exports\BrandsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BrandsImport;
use App\Http\Controllers\Controller;
class BrandController extends Controller
{

    public function index(Request $request)
    {
        if($request->search !="") {
            $search = $request->input('search');

            $brand = Brand::query()
                ->where('name', 'LIKE', "{$search}%")
                ->orderBy('id', 'asc')->paginate(10);
        }else{
            $brand = Brand::query()
                ->orderBy('id', 'asc')->paginate(10);
        }
        return view('pages.brands.index',['brand'=>$brand]);
    }


    public function create()
    {

        return view('pages.brands.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
        ]);

        Brand::create([
            'name'        => $request->name,
        ]);

        /*Player::create($request->all());*/
        return redirect('brands')->with('status','Item created!');
    }


    public function show(Brand $brand)
    {
        return view('pages.brands.show',['brand'=>$brand]);
    }


    public function edit(Brand $brand)
    {
        return view('pages.brands.edit',['brand'=>$brand]);
    }


    public function update(Request $request, Brand $brand)
    {
        $brand->update($request->all());
        return redirect('brands')->with('status','Item edited successfully!');
    }


    public function destroy(Brand $brand)
    {
        try {
            $brand = Brand::findOrFail($brand->id);
            $brand->delete();
            return redirect('brands')->with('status', 'Item deleted successfully!');
        } catch (ModelNotFoundException $e) {
            return redirect('brands')->with('status', 'Item not deleted successfully!');
        } catch (\Exception $a) {
            return redirect('brands')->with('status', $a->getMessage());
        }
    }
    public function export()
    {
        return Excel::download(new BrandsExport, 'brands.xlsx');
    }
    public function import()
    {
        Excel::import(new BrandsImport, 'C:/brands.xlsx');

        return redirect('/')->with('success', 'All good!');
    }

}
