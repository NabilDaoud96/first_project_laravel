<?php
use Illuminate\Http\Request;
use App\PhoneNumber;
use App\Topic;
use App\Product;
use App\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::group(['prefix' => 'account'], function(){
//
//    Route::get('nabil1', function(){
//        return redirect()->route('nabil');
//    });
//    Route::get('pakisi', function() {
//       echo 'pioipo';
//    })->name('nabil');
//    Route::post('profile', function() {
//        //
//    });
//});



Route::get('/home','homeController@');



Auth::routes();

Route::get('/',function(Request $request,PhoneNumber $phoneNumber,Topic $topic ){

    // 1 Creation 1
   /*$request->user()->phoneNumber()->create([
        'phone_number' => '12344567890'
    ]);*/

   //  creation 2
   /* $phoneNumber->phone_number = '1234';
    $phoneNumber->user()->associate($request->user());
    $phoneNumber->save();*/


    //2 selection de phoneNumber
   /*$phoneNumber = PhoneNumber::where('phone_number','1234')->first();  // apres whre il faut mettre get pi bien first ....ect dans ce cas il faut utliser first pour retenir un model pour acceder a user et non collection
    echo $phoneNumber->user->name;*/    //or echo $phoneNumber->user()->first()->name;  pour acceder a le nom il faut user etre model non colection user => model; user()->firt() => model ; user() => belongTo


    // 3 selection de user
    /*$user = \App\User::find(1);
    echo $user->phoneNumber->phone_number;*/   // le meme pour le cas presedant

    //4 selection all number and send them to the view

    /*$phoneNumbers = PhoneNumber::get();  // on a une colection il faut une boucle pour la parcourir
    return view('phone.index',compact('phoneNumbers'));*/


    //5 token
    /*echo $request->user()->token->token;*/  // we use it bettre from the controller at the end to this page


    //6 create topics
    //$topic = new Topic;
    /*$topic->title = 'topic three';
    $topic->user()->associate($request->user());
    $topic->save();*/


    // 7 attacher les tables belongsTomany
  /*  $product = new Product;
    $product->title = 'apple mouse';
    $product->price = 20;
    $product->save();

//  $categoery = Category::find(2);
    $categoery = Category::whereIn('title',['tech','apple'])->get();

    $product->categories()->sync($categoery);
//  $product->categories()->attach($categoery);
//  $product->categories()->dettach($categoery);*/

    // 8 add contenu pivot
    /*$product = Product::find([1,2,3,9]);
    $category = Category::find(1);

    $category->products()->orWherePivot('visible',false)->updateExistingPivot($product,[
        'visible' => true
    ]);*/


/*//    $categories= Category::with('products')->get();   meme principe
      $categories= Category::get();
//    dd($categories->flatMap->products);  //  we use flatMap when we acced to the colection and parcour all the colection*/


//  count a relontion model of un athoer model
    /*$categories= Category::withCount('products')->get();
    foreach ($categories as $category) {
        echo $category->products_count;
    }*/

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mailing/unsubscribe/{token}','mailing\SubscriptionController@unsubscribe');

Route::get('/topics','TopicController@index');
Route::get('/topics/{topic}','TopicController@show')->name('topics.show');
Route::get('/user/topics/','UserTopicController@index');

Route::get('/categories/{category}','CategoryContorller@show');

Route::get('/groupes/{groupe}','GroupeContorller@show');

