<?php

namespace App\Http\Controllers;

use DB;
use Cart;

use App\News;
use App\Contact;
use App\Product;
use App\News_img;
use App\ProductType;
use App\Mail\SendToUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TsaiYiHua\ECPay\Checkout;

class FrontController extends Controller
{

    public function index()
    {
        return view('front/index'); //return要顯示的畫面還有"表單"
    }

    public function news()
    {
        $news = DB::table('news')->orderBy('sort', 'desc')->get(); //設一個變數透過table取得HeidiSQL的表單    **table('表單名稱')**
        return view('front/news', compact('news')); //return要顯示的畫面還有"表單"  (news->表單)
    }

    public function news_detail($id)
    {

        // $news = DB::table('news')->get();
        $news = News_img::where('news_id', $id)->get();

        return view('front/news_imgs', compact('news'));
    }

    public function products()
    {
        $productType = ProductType::all();
        $product = Product::orderBy('sort', 'desc')->get();

        return view('front/products', compact('productType', 'product')); //return要顯示的畫面還有"表單"
    }

    public function product_detail($id)
    {
        $product = Product::find($id);
        return view('/front/product_page', compact('product'));
    }

    public function add_cart(Request $Product)
    {
        $userID = 2;
        Cart::session($userID)->add(array(
            'id' => $Product->id,
            'name' => $Product->name,
            'price' => $Product->price,
            'quantity' => $Product->count,
            'attributes' => array(),
            'associatedModel' => Product::find($Product->id),
        ));


        return redirect('/product/cart_total');
    }

    public function total_cart()
    {
        $items = \Cart::session(2)->getContent();

        return view('front/cart',compact('items'));
    }

    public function total_cart_upload(Request $request ,$id)
    {

        \Cart::session(2)->update($id, array(
            'quantity' =>  $request->quantity,
        ));
        $items = \Cart::session(2)->getContent();

        return $items;
    }

    public function total_cart_delete(Request $request ,$id)
    {
        \Cart::session(2)->remove($id);

        return 'success';
    }


    public function cart_checkout()
    {
        $items = \Cart::session(2)->getContent();
        return view('front/cart_checkout',compact('items'));
    }

    protected $checkout;

    public function __construct(Checkout $checkout)
    {
        $this->checkout = $checkout;
    }

    public function sendOrder()
    {
        $formData = [
            'UserId' => 1, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'ItemName' => 'Product Name',
            'TotalAmount' => '2000',
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];
        return $this->checkout->setPostData($formData)->send();

    }



    public function contact()
    {
        return view('front/contact');
    }

    public function contact_form(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'recaptcha',
            recaptchaFieldName() => recaptchaRuleName(),
        ]);

        Mail::to('tmnak32156@gmail.com')->send(new SendToUser($request));
        Contact::create($request->all());
        return redirect('/contact');
    }

}
