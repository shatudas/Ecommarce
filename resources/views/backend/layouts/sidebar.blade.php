<div class="left-sidebar">
   <nav class="sidebar-menu">
    <ul id="nav-accordion">
     
     <li class="sub-menu">
      <a href="javascript:;">
       <i class=" ti-home"></i>
       <span>Dashboard</span>
      </a>
     </li>
     
     <li class="nav-title">
      <h5 class="text-uppercase">Lock Up</h5>
     </li>


     <!-----admin setup-------->
     <li class="sub-menu" >
      <a href="javascript:;" class="@if(request()->path()==='create_admin' || request()->path()==='manage_admin'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Admin Setup</span>
      </a>
      <ul class="sub">
       <li><a  href="{{route('create_admin')}}" class="@if(request()->path()==='create_admin'){{'text-danger'}} @else @endif">Create Admin</a></li>
       <li><a  href="{{route('manage_admin')}}"  class="@if(request()->path()==='manage_admin'){{'text-danger'}} @else @endif">Magage Admin</a></li>
      </ul>
     </li>

     <!---------website setting----->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='setting' || request()->path()==='about' || request()->path()==='contuct' || request()->path()==='term_condition' || request()->path()==='privacy_police' || request()->path()==='how_to_bay'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Website Setting</span>
      </a>
      <ul class="sub">
       <li><a  href="{{route('setting')}}" class="@if(request()->path()==='setting'){{'text-danger'}} @else @endif">Setting</a></li>
       <li><a  href="{{route('about')}}" class="@if(request()->path()==='about'){{'text-danger'}} @else @endif">About</a></li>
       <li><a  href="{{route('contuct')}}" class="@if(request()->path()==='contuct'){{'text-danger'}} @else @endif">Contuct</a></li>
       <li><a  href="{{route('term_condition')}}" class="@if(request()->path()==='term_condition'){{'text-danger'}} @else @endif">Term & Condition</a></li>
       <li><a  href="{{route('privacy_police')}}" class="@if(request()->path()==='privacy_police'){{'text-danger'}} @else @endif">Privacy & Police</a></li>
       <li><a  href="{{route('how_to_bay')}}" class="@if(request()->path()==='how_to_bay'){{'text-danger'}} @else @endif">How To Bay</a></li>
      </ul>

     </li>

     <!-----slier info----------->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='slider_add' || request()->path()==='manage_slider'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Slider Manage</span>
      </a>
      <ul class="sub">
       <li><a  href="{{route('slider_add')}}" class="@if(request()->path()==='slider_add'){{'text-danger'}} @else @endif">Slider Add</a></li>
       <li><a  href="{{route('manage_slider')}}" class="@if(request()->path()==='manage_slider'){{'text-danger'}} @else @endif">Magage Slider</a></li>
      </ul>
     </li>


     <!-----FAQ---------->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='faq' || request()->path()==='manage_faq'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>FAQ Manage</span>
      </a>
      <ul class="sub">
       <li><a  href="{{route('faq')}}" class="@if(request()->path()==='faq'){{'text-danger'}} @else @endif">FAQ</a></li>
       <li><a  href="{{route('manage_faq')}}" class="@if(request()->path()==='manage_faq'){{'text-danger'}} @else @endif">manage FAQ</a></li>
      </ul>
     </li>


     <li class="nav-title">
      <h5 class="text-uppercase">Main</h5>
     </li>


     <!-----brand info------->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='brand_info' || request()->path()==='manage_brand'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Brand Information</span>
      </a>
      <ul class="sub">
       <li><a  href="{{route('brand_info')}}" class="@if(request()->path()==='brand_info'){{'text-danger'}} @else @endif">Brand Add</a></li>
       <li><a  href="{{route('manage_brand')}}" class="@if(request()->path()==='manage_brand'){{'text-danger'}} @else @endif">Magage Brand</a></li>
       <li><a  href="{{route('all_brand')}}" target="_blank" class="@if(request()->path()==='all_brand'){{'text-danger'}} @else @endif">All Brand</a></li>
      </ul>
     </li>

    
     <!---------item info------>
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='item_info' || request()->path()==='manage_item'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Item Information</span>
      </a>
      <ul class="sub">
       <li><a  href="{{route('item_info')}}" class="@if(request()->path()==='item_info'){{'text-danger'}} @else @endif">Item Add</a></li>
       <li><a  href="{{route('manage_item')}}" class="@if(request()->path()==='manage_item'){{'text-danger'}} @else @endif">Magage Item</a></li>
       <li><a  href="{{route('all_item')}}" class="@if(request()->path()==='all_item'){{'text-danger'}} @else @endif" target="_blank">All Item</a></li>
      </ul>
     </li>

     <!-------category info------->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='category_info' || request()->path()==='manage_category'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Category Information</span>
      </a>
      <ul class="sub">
      <!-----category------->
       <li><a  href="{{route('category_info')}}" class="@if(request()->path()==='category_info'){{'text-danger'}} @else @endif">Category Add</a></li>
       <li><a  href="{{route('manage_category')}}" class="@if(request()->path()==='manage_category'){{'text-danger'}} @else @endif">Magage Category</a></li>
       <li><a  href="{{route('all_category')}}" target="_blank" class="@if(request()->path()==='all_category'){{'text-danger'}} @else @endif" >All Category</a></li>
 
      </ul>
     </li>

     <!------sub category------->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='subcategory_info' || request()->path()==='manage_subcategory'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Sub Category</span>
      </a>
      <ul class="sub">
       <li><a  href="{{route('subcategory_info')}}" class="@if(request()->path()==='subcategory_info'){{'text-danger'}} @else @endif">Sub Category Add</a></li>
       <li><a  href="{{route('manage_subcategory')}}" class="@if(request()->path()==='manage_subcategory'){{'text-danger'}} @else @endif">Magage SubCategory</a></li>
       <li><a  href="{{route('all_subcategory')}}" target="_blank" class="@if(request()->path()==='all_subcategory'){{'text-danger'}} @else @endif">All SubCategory</a></li>
      </ul>
     </li>

    

     <!---------product info-------->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='product_info' || request()->path()==='manage_product'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Product Information</span>
      </a>
      <ul class="sub">
       <li><a  href="{{route('product_info')}}" class="@if(request()->path()==='product_info'){{'text-danger'}} @else @endif">Product Add</a></li>
       <li><a  href="{{route('manage_product')}}" class="@if(request()->path()==='manage_product'){{'text-danger'}} @else @endif">Magage Product</a></li>
       <li><a  href="{{route('all_product')}}" target="_blank" class="@if(request()->path()==='all_product'){{'text-danger'}} @else @endif">All Product</a></li>
      </ul>
     </li>


     <li class="nav-title">
      <h5 class="text-uppercase">Customer</h5>
     </li>


     <!---------Order Info------->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='customer_order'){{'active'}} @else @endif" >
       <i class=" ti-layers"></i>
       <span>Order Information</span>
      </a>
      <ul class="sub">
       <li><a  href="{{route('customer_order')}}" class="@if(request()->path()==='customer_order'){{'text-danger'}} @else @endif">Customer Order</a></li>
      </ul>
     </li>

     <!---------Customer Account------>
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='User_Info'){{'active'}} @else @endif" >
       <i class=" ti-layers"></i>
       <span>Customer Account Info</span>
      </a>
      <ul class="sub">
       <li><a  href="{{route('User_Info')}}" class="@if(request()->path()==='User_Info'){{'text-danger'}} @else @endif">User Info</a></li>
      </ul>
     </li>

     <!---------Customer Message------>
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='Message'){{'active'}} @else @endif" >
       <i class=" ti-layers"></i>
       <span>Customer Message</span>
      </a>
      <ul class="sub">
       <li><a  href="{{route('Message')}}" class="@if(request()->path()==='Message'){{'text-danger'}} @else @endif">Message</a></li>
      </ul>
     </li>

    </ul>
   </nav>
  </div>