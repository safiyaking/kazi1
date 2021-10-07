public function index()
{
    $products = Product::latestFirst('insert wanted categoryid');

    return view('products.someview', compact('products'));
}