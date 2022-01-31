<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClintController;
use App\Http\Controllers\FullentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\paginationcontroller;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\EportpdfController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;
use App\paymentGetway\payment;

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

//Route::get('/{lang}', function($lang){
   // App::setlocale($lang);
   // return view('pages/welcome');
//})->name('home');

Route::get('/about-us', function () {// about-me:is page url name
    return view('pages/about',[]);//about:is the actual page name will open it

})->name("about");//to put about-us in appas to call it

//view('uri:is the last url after last/','page nmae',array to pass data)
Route::view('contact-me', "pages/contact",[
'page_name' => 'contact me page',
'page_description' => "this is description"


] )->name('contact');

Route::get('category/{id}', function ($id) {
    $cats=[
        '1' => 'games',
        '2' => 'programing',
        '3' => 'books'
    ];

    return view('pages/category',[
        'the_id' => $cats[$id] ??"?? mean if not found output this messame"
    ])->name('category');

});
/*
Route::get('category/{id}', function ($id) {
   // $name=request('name');//to return url value of variable sended by url
    return $id;

});
*/
//****************start cours2**********************//
Route::get('/home/{name?}',[App\Http\Controllers\HomeController::class,'index'])->name('home.index');
Route::get('/users',[App\Http\Controllers\UserController::class,'index'])->name('users.index');
Route::get('/',[ProductController::class,'index'])->name('product.index');
Route::get('/posts',[ClintController::class,'getAllPost'])->name('posts.getAllPost');
Route::get('/add-posts',[ClintController::class,'addPost'])->name('posts.addPost');
Route::get('/update-posts',[ClintController::class,'updatePost'])->name('posts.updatePost');
Route::get('/delete-posts/{id}',[ClintController::class,'deletePost'])->name('posts.deletePost');
Route::get('/fullent-posts',[FullentController::class,'index'])->name('posts.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkUser');
Route::post('/login',[LoginController::class,'loginSupmit'])->name('login.loginSupmit');
Route::get('session/get',[sessionController::class,'getSessionData'])->name('get.data');
Route::get('session/add',[sessionController::class,'storeSessionData'])->name('add.data');
Route::get('session/remove',[sessionController::class,'deleteSessionData'])->name('remove.data');
Route::get('allpost',[PostController::class,'getAllPost'])->name('get.posts');
Route::get('add-post',[PostController::class,'addPost'])->name('add.posts');
Route::match(['get','post'],'add-post-sub',[PostController::class,'addPostSubmit'])->name('add.postSubmite');
Route::get('single_post/{id}',[PostController::class,'getPostById'])->name('get.postsById');
Route::get('delete_post/{id}',[PostController::class,'deletePostById'])->name('delete.posts');
Route::get('edit_post/{id}',[PostController::class,'editePost'])->name('get.postsById');
Route::match(['get','post'],'update-post',[PostController::class,'updatePost'])->name('update.posts');
Route::get('inner',[PostController::class,'innerJoinCaluse'])->name('get.inner');
Route::get('right',[PostController::class,'rightJoinCaluse'])->name('get.right');
Route::get('left',[PostController::class,'leftJoinCaluse'])->name('get.left');
Route::get('getAllPostModel',[PostController::class,'getAllPostsModel'])->name('get.postModel');
Route::get('AllUsers',[paginationcontroller::class,'allUser'])->name('get.allUser');
Route::get('/Upload',[UploadController::class,'uploadForm'])->name('get.Upload');
Route::post('/Upload',[UploadController::class,'uploadFile'])->name('file.Upload');
Route::get('/sendMail',[MailController::class,'sendMail']);
Route::get('/insertUser',[UserController::class,'insertRecord']);
Route::get('/getUser/{id}',[UserController::class,'getUserPhone']);
Route::get('/addPostComment',[PostController::class,'addPost2']);
Route::get('/getComment/{id}',[PostController::class,'addComment']);
Route::get('/getCommentByPost/{id}',[PostController::class,'getCommentByPost']);
Route::get('/addroles',[RoleController::class,'addRole']);
Route::get('/addEmloyees',[employeeController::class,'addEmployee']);
Route::get('/exportAxcel',[employeeController::class,'exportAxcel']);
Route::get('/exportCsv',[employeeController::class,'exportCsv']);
Route::get('/pdf',[EportpdfController::class,'pdf']);
Route::get('/resizImage',[ImageController::class,'resizImage']);
Route::get('/resizImage',[ImageController::class,'resizImage'])->name('image.resized');
Route::match(['get','post'],'/addImage',[ImageController::class,'resizeImageSubmit'])->name('add.image');

Route::get('/dropzone',[DropzoneController::class,'dropzone']);
Route::post('/addDropzoneImage',[DropzoneController::class,'dropzoneSubmit'])->name('add.dropzon');
Route::get('/gallary',[GallaryController::class,'gallary']);
Route::get('/editor',[EditorController::class,'editor']);
Route::get('/addStudent',[StudentController::class,'addStudent']);
Route::post('/storstudent',[StudentController::class,'storStudent'])->name('stor.student');
Route::get('/allStudent',[StudentController::class,'student']);
Route::get('/editStudent/{id}',[StudentController::class,'editStudent'])->name('edit.student');
Route::post('/updateStudent',[StudentController::class,'updateStudent'])->name('update.student');
Route::get('/deleteStudent/{id}',[StudentController::class,'deleteStudent'])->name('delete.student');
Route::get('/conntact-us',[ContactController::class,'contact']);
Route::post('/sendMail',[ContactController::class,'sendMail'])->name('contacl.us');
Route::get('/splitName',[TestController::class,'FirstLastName']);

Route::get('test',function(){
return view('pages/test');
});
Route::get('about2',function(){
    return view('pages/about2');
    });

    Route::get('index',function(){
        return view('pages/index');
        });
        Route::get('contact2',function(){
            return view('pages/contact2');
            });

        Route::get('payment',function(){
            return payment::process();
            });






