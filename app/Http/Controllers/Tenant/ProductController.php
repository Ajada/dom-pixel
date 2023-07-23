<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant\Product;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ProductController extends Controller
{
    protected $paginate = '5';
    protected $fileds = [
        'image_url',
        'name',
        'description',
        'price',
        'amount',
        'id',
    ];
    
    // public function __construct() { $this->middleware(''); }

    public function index()
    {
        $products = new Product();

        return Inertia::render('Dashboard', [
            'dataTable' => $products
                ->select($this->fileds)
                ->paginate($this->paginate),
        ]);
    }

    public function create()
    {
        return Inertia::render('Entities/AddProduct', []);
    }

    public function store(Request $request)
    {
        $products = new Product();

        $data = $request->all();

        $data['image_url'] = $data['image_url'] ?? 'https://ui-avatars.com/api/?name='. $data['name'] .'&background=random';

        $new = $products->create($data);

        if(! $new)
            return Inertia::render('Entities/AddProduct', [
                'message' => 'Algo deu erradao ao criar item !',
                'color' => 'text-red-500'
            ]);

        return Inertia::render('Entities/AddProduct', [
            'message' => 'Item adicionado com successo !',
            'color' => 'text-green-500'
        ]);
        
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $products = new Product();

        if($products->find($id))
            return Inertia::render('Entities/EditProduct', [
                'product' => $products->find($id)
            ]);

        return $this->index();
    }

    public function update(Request $request, $id)
    {
        $products = new Product();

        foreach ($request->all() as $key => $value) {
            DB::table('products')
                ->whereId($id)
                    ->update([
                        $key => $value
                    ]);
        }

        return Inertia::render('Entities/EditProduct', [
            'product' => $products->find($id),
            'message' => 'Item editado com successo !',
            'color' => 'text-green-500'
        ]);

    }


    public function destroy(string $id)
    {
        DB::table('products')
            ->whereId($id)
                ->delete();

        return $this->index();
    }
}
