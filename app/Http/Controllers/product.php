public function index()
{
    $products = Product::latestFirst('insert wanted categoryid');

    return view('products.someview', compact('products'));
}
{
    $products = Product::latestFirst('insert wanted categoryid');
    return view('products.someview', compact('products'));

    $catalogueSize = Product::count('category..');
    return view('products.someview', compact('catalogueSize'));

    $transactions = Transaction::latestFirst();
    return view('products.someview', compact('transactions'));
}
public function category 
{
    return $this->belongsTo(Category::class);
}

public function scopeLatestFirst($query, $categoryId)
{
    return $query->where('category_id', $categoryId)-> orderBy('created_at', 'desc')->get();
}