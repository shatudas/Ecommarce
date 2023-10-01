<?php

use Illuminate\Support\Facades\Route;


//------FrontEnd---------//

//--------home page info-------------//
Route::get('/','frontend\fontcontroller@homemethod')->name('/');

Route::get('shop','frontend\fontcontroller@shopmethod')->name('shop');
Route::get('product','frontend\fontcontroller@productmethod')->name('product');
Route::get('regular','frontend\fontcontroller@regularmethod')->name('regular');
Route::get('cart','frontend\fontcontroller@cartmethod')->name('cart');

Route::get('itemProduct/{id}','frontend\fontcontroller@itemPormethod')->name('itemProduct');
Route::get('catProduct/{id}','frontend\fontcontroller@catPormethod')->name('catProduct');
Route::get('SubcatProduct/{id}','frontend\fontcontroller@SubcatPromethod')->name('SubcatProduct');
Route::get('search','frontend\fontcontroller@searchmethod')->name('search');
Route::get('product_view/{id}','frontend\fontcontroller@viewpromethod')->name('product_view');
Route::get('brand/{id}','frontend\fontcontroller@bradmethod')->name('brand');


//_______Basic Page_________//
Route::get('about_us','frontend\fontcontroller@about_us_method')->name('about_us');
Route::get('blog','frontend\fontcontroller@blogmethod')->name('blog');
Route::get('blog_single','frontend\fontcontroller@blogsinglemethod')->name('blog_single');
Route::get('contact','frontend\fontcontroller@contactmethod')->name('contact');
Route::get('FAQ_page','frontend\fontcontroller@FAQ_pagemethod')->name('FAQ_page');
Route::get('how_to','frontend\fontcontroller@how_tomethod')->name('how_to');
Route::get('Privacy_Policy','frontend\fontcontroller@Privacy_Policymethod')->name('Privacy_Policy');
Route::get('Term_condition','frontend\fontcontroller@term_conditionmethod')->name('Term_condition');


// ______user Massage_______//
Route::post('sent_massage','frontend\userMessage@sent_massagmethod')->name('sent_massage');
Route::get('Message','frontend\userMessage@Messagemethod')->name('Message');
Route::get('delMess/{id}','frontend\userMessage@delMessmethod')->name('delMess');
Route::get('editMess/{id}','frontend\userMessage@editMessmethod')->name('editMess');
Route::post('message_update/{id}','frontend\userMessage@message_updatemethod')->name('message_update');


//_______add to cart_______//
Route::post('addtocart/{id}','frontend\fontcontroller@addtocardmethod')->name('addtocart');
Route::get('chack_cart','frontend\fontcontroller@chack_cartmethod')->name('chack_cart');
Route::get('remove/{rowId}','frontend\fontcontroller@removemethod')->name('remove');
Route::get('cler','frontend\fontcontroller@clermethod')->name('cler');
Route::get('chack_out','frontend\fontcontroller@chack_outmethod')->name('chack_out');
Route::post('register','frontend\fontcontroller@registermethod')->name('register');
Route::post('pro_update/{rowId}','frontend\fontcontroller@pro_updatemethod')->name('pro_update');
Route::post('shiping_data/{id}','frontend\fontcontroller@shiping_datamethod')->name('shiping_data');

//_______user deshboard_______//
Route::middleware('isCustomer')->group(function(){
    Route::get('userdashboard','frontend\deshboard@userdashboardmethod')->name('userdashboard');
    Route::get('all_order','frontend\deshboard@all_ordermethod')->name('all_order');
    Route::get('updateinformation','frontend\deshboard@updateinformationmethod')->name('updateinformation');
    Route::get('changepassword','frontend\deshboard@changepasswordnmethod')->name('changepassword');
    Route::get('invoice/{id}','frontend\deshboard@invoicemethod')->name('invoice');
    Route::post('userPassChange','frontend\deshboard@userPassChangemethod')->name('userPassChange');
    Route::post('userDataUpdate/{id}','frontend\deshboard@userDataUpdatemethod')->name('userDataUpdate');
    Route::post('profileUp/{id}','frontend\deshboard@profileUpmethod')->name('profileUp');
});


//----------backend------------//

//________Auth________//
Auth::routes(['register'=>false]);

Route::middleware('is_admin')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('admin','HomeController@adminHome')->name('admin.home');

    //________User Info___________//
    Route::get('create_admin','backend\createcontroller@createadminmethod')->name('create_admin');
    Route::get('manage_admin','backend\createcontroller@manageadminmethod')->name('manage_admin');
    Route::post('insert_admin','backend\createcontroller@insertadminmethod')->name('insert_admin');
    Route::get('activeadmin/{id}','backend\createcontroller@activeadminmethod')->name('activeadmin');
    Route::get('inactiveadmin/{id}','backend\createcontroller@inactiveadminmethod')->name('inactiveadmin');
    Route::get('deleteadmin/{id}','backend\createcontroller@deleteadminmethod')->name('deleteadmin');
    Route::get('editadmin/{id}','backend\createcontroller@editadminmethod')->name('editadmin');
    Route::post('update_admin/{id}','backend\createcontroller@updateadminmethod')->name('update_admin');


    //________Item Info_________//
    Route::get('item_info','backend\itemcontroller@iteminfomethod')->name('item_info');
    Route::get('manage_item','backend\itemcontroller@manageitemmethod')->name('manage_item');
    Route::post('item_insert','backend\itemcontroller@iteminsertmethod')->name('item_insert');
    Route::get('itemactive/{id}','backend\itemcontroller@itemactivemethod')->name('itemactive');
    Route::get('iteminactive/{id}','backend\itemcontroller@iteminactivemethod')->name('iteminactive');
    Route::get('deleteitem/{id}','backend\itemcontroller@deleteitemmethod')->name('deleteitem');
    Route::get('edititem/{id}','backend\itemcontroller@edititemmethod')->name('edititem');
    Route::post('item_update/{id}','backend\itemcontroller@itemupdatemethod')->name('item_update');
    Route::get('all_item','backend\itemcontroller@allitemmethod')->name('all_item');


    //_________Category Info_________//
    Route::get('category_info','backend\categorycontroller@categoryinfomethod')->name('category_info');
    Route::get('manage_category','backend\categorycontroller@managecategorymethod')->name('manage_category');
    Route::post('category_insert','backend\categorycontroller@categoryinsertmethod')->name('category_insert');
    Route::get('catactive/{id}','backend\categorycontroller@catactivemethod')->name('catactive');
    Route::get('catinactive/{id}','backend\categorycontroller@catinactivemethod')->name('catinactive');
    Route::get('deletecat/{id}','backend\categorycontroller@deletecatmethod')->name('deletecat');
    Route::get('editcat/{id}','backend\categorycontroller@editcatmethod')->name('editcat');
    Route::post('category_update/{id}','backend\categorycontroller@categoryupdatemethod')->name('category_update');
    Route::get('all_category','backend\categorycontroller@allcatmethod')->name('all_category');


    //_________Sub Category Info__________//
    Route::get('subcategory_info','backend\categorycontroller@sucategoryinfomethod')->name('subcategory_info');
    Route::post('subcategory_insert','backend\categorycontroller@subcategoryinsertmethod')->name('subcategory_insert');
    Route::get('manage_subcategory','backend\categorycontroller@managesubcategorymethod')->name('manage_subcategory');
    Route::get('subcatinactive/{id}','backend\categorycontroller@subcatinactivemethod')->name('subcatinactive');
    Route::get('subcatactive/{id}','backend\categorycontroller@subcatactivemethod')->name('subcatactive');
    Route::get('deletesubcat/{id}','backend\categorycontroller@deletesubcatmethod')->name('deletesubcat');
    Route::get('editsubcat/{id}','backend\categorycontroller@editsubcatmethod')->name('editsubcat');
    Route::post('subcategory_update/{id}','backend\categorycontroller@subcategoryupdatemethod')->name('subcategory_update');
    Route::get('getsubcategory/{category_id}','backend\productcontroller@getsubcategorymethod')->name('getsubcategory');
    Route::get('all_subcategory','backend\categorycontroller@all_subcategorymethod')->name('all_subcategory');


    //_____________Brand Info_______________//
    Route::get('brand_info','backend\brandcontroller@brandinfomethod')->name('brand_info');
    Route::get('manage_brand','backend\brandcontroller@managebrandmethod')->name('manage_brand');
    Route::post('insert_brand','backend\brandcontroller@insertbrandmethod')->name('insert_brand');
    Route::get('brandinactive/{id}','backend\brandcontroller@brandactivemethod')->name('brandinactive');
    Route::get('brandactive/{id}','backend\brandcontroller@brandinactivemethod')->name('brandactive');
    Route::get('delete_brand/{id}','backend\brandcontroller@deletebrandmethod')->name('delete_brand');
    Route::get('edit_brand/{id}','backend\brandcontroller@editbrandmethod')->name('edit_brand');
    Route::post('update_brand/{id}','backend\brandcontroller@updatebrandmethod')->name('update_brand');
    Route::get('all_brand','backend\brandcontroller@all_brandmethod')->name('all_brand');


    //______Product Info________//
    Route::get('product_info','backend\productcontroller@productinfomethod')->name('product_info');
    Route::get('manage_product','backend\productcontroller@manageproductmethod')->name('manage_product');
    Route::get('getcategory/{item_id}','backend\productcontroller@getcategorymethod')->name('getcategory');
    Route::post('insert_product','backend\productcontroller@insertproductmethod')->name('insert_product');
    Route::get('status_Available/{id}','backend\productcontroller@statusAvailablemethod')->name('status_Available');
    Route::get('status_Unavailable/{id}','backend\productcontroller@statusUnavailablemethod')->name('status_Unavailable');
    Route::get('active/{id}','backend\productcontroller@activepromethod')->name('active');
    Route::get('inactive/{id}','backend\productcontroller@inactivepromethod')->name('inactive');
    Route::get('deletepro/{id}','backend\productcontroller@deletepromethod')->name('deletepro');
    Route::get('editpro/{id}','backend\productcontroller@editpromethod')->name('editpro');
    Route::post('updata_product/{id}','backend\productcontroller@updataproductmethod')->name('updata_product');
    Route::get('all_product','backend\productcontroller@allproductmethod')->name('all_product');


    //_______Slider Info_______//
    Route::get('slider_add','backend\slidercontroller@slideraddmethod')->name('slider_add');
    Route::post('Insert_slider','backend\slidercontroller@sliderinsertmethod')->name('Insert_slider');
    Route::get('manage_slider','backend\slidercontroller@manageslidermethod')->name('manage_slider');
    Route::get('slider_delete/{id}','backend\slidercontroller@sliderdetemethod')->name('slider_delete');
    Route::get('slider_edit/{id}','backend\slidercontroller@slidereditmethod')->name('slider_edit');
    Route::post('Update_slider/{id}','backend\slidercontroller@updateslidermethod')->name('Update_slider');


    //__________Setting____________//
    Route::get('setting','backend\settingcontroller@settingmethod')->name('setting');
    Route::post('update_setting/{id}','backend\settingcontroller@updatesettingmethod')->name('update_setting');


    //_______About_________//
    Route::get('about','backend\backcontroller@aboutmethod')->name('about');
    Route::post('update_about/{id}','backend\backcontroller@updateaboutmethod')->name('update_about');


    //______Contact________//
    Route::get('contuct','backend\backcontroller@contuctmethod')->name('contuct');
    Route::post('update_contuct/{id}','backend\backcontroller@updatecontuctmethod')->name('update_contuct');


    //________Term Condition________//
    Route::get('term_condition','backend\backcontroller@termconditionmethod')->name('term_condition');
    Route::post('update_tram/{id}','backend\backcontroller@updatetrammethod')->name('update_tram');


    //_________Privacy Policy________//
    Route::get('privacy_police','backend\backcontroller@privacypolicemethod')->name('privacy_police');
    Route::post('update_policy/{id}','backend\backcontroller@updatepolicymethod')->name('update_policy');


    //________How Bay________//
    Route::get('how_to_bay','backend\backcontroller@howtobaymethod')->name('how_to_bay');
    Route::post('update_how/{id}','backend\backcontroller@updatehowmethod')->name('update_how');


    //_______FAQ Info________//
    Route::get('faq','backend\backcontroller@faqmethod')->name('faq');
    Route::get('manage_faq','backend\backcontroller@managefaqmethod')->name('manage_faq');
    Route::post('Insert_FAQ','backend\backcontroller@insertfaqmethod')->name('Insert_FAQ');
    Route::get('deleteFAQ/{id}','backend\backcontroller@deleteFAQmethod')->name('deleteFAQ');
    Route::get('editFAQ/{id}','backend\backcontroller@editFAQmethod')->name('editFAQ');
    Route::post('update_FAQ/{id}','backend\backcontroller@updateFAQmethod')->name('update_FAQ');


    Route::get('customer_order','backend\order@customer_ordermethod')->name('customer_order');
    Route::post('update/{id}','backend\order@update_ordermethod')->name('update');


    //_______Customer Info_______//
    Route::get('User_Info','backend\backcontroller@User_Infomethod')->name('User_Info');
    Route::get('user_acc_del/{id}','backend\backcontroller@user_acc_delmethod')->name('user_acc_del');
    Route::get('user_acc_edit/{id}','backend\backcontroller@user_acc_editmethod')->name('user_acc_edit');
    Route::post('Customer_update/{id}','backend\backcontroller@Customer_updatemethod')->name('Customer_update');

});
