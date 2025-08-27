<?php




if (!function_exists('getProfileImg')) {
    function getProfileImg(string $name): string {
        // You can use the $name parameter inside the function to customize the URL
        // For example, remove spaces to fit the API seed format
        $name = 'Fairuz Isant';
        $seed = str_replace(' ', '', $name);
        return "https://api.dicebear.com/9.x/initials/svg?seed={$seed}";
    }
}

if (!function_exists('breadcrump')) {
    function breadcrump():string {
        $path = request()->path(); // full path
        $path = str($path)->after('backend/');
         return $path?: 'Unknown';
    }

    if(!function_exists('general_status')){
        function general_status ($status, $route ='#'){
           if($status == 0){
              echo '  <a  href="'.$route.'"
              class="btn btn-danger btn-sm w-24 inline-block mr-1 mb-2">Inactive</a>';
           } elseif($status == 1) {    
                echo  '<a href="'.$route.'"
                 class="btn btn-success w-24 inline-block mr-1 mb-2">Active</a> ';
           }
                
        }

    }

     if(!function_exists('title_img')){
        function title_img ($src){
           
          if($src &&  Storage::disk('public')->exists($src)){
             return asset('storage/'.$src);
          }else{
            return asset('frontend/images/pLaceholderimage.jpg');
          }
                
        }

    }
    if(!function_exists('banner_img')){
        function banner_img ($src){
           
          if($src &&  Storage::disk('public')->exists($src)){
             return asset('storage/'.$src);
          }else{
            return asset('frontend/images/pLaceholderimage.jpg');
          }
                
        }
    }

 if(!function_exists('product_img')){
        function product_img ($src){
           
          if($src &&  Storage::disk('public')->exists($src)){
             return asset('storage/'.$src);
          }else{
            return asset('frontend/images/pLaceholderimage.jpg');
          }
                
        }
    }



    if (!function_exists('stock_status')) {
      function stock_status($status, $route = "#")
      {
  
          if ($status == 0) {
              echo '<a
                      href="' . $route . '"
                      class="btn btn-danger btn-sm w-24 d-inline-block me-1 mb-2">Out of Stock</a>';
          } else if ($status == 1) {
              echo '<a 
              href="' . $route . '"
              class="btn btn-success w-24 d-inline-block me-1 mb-2">In Stock</a>';
          }
      }
  }
}




