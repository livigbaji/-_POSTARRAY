

function ParsePost{

$x = urldecode($x);

$d = array_reduce(explode('&', $x), function($a,$c){
  return array_merge($a, [explode('=', $c)[0] => explode('=', $c)[1]]);
},[]);

$new = [];

foreach((array) $d as $key =>  $value){
  if($x = preg_match("%(\w+)\[([\w\s]+)\]%i",$key, $match)){
    if(array_key_exists($match[1], $new) && is_array($new[$match[1]])){
      $new[$match[1]] = array_merge($new[$match[1]], [$match[2] => $value]);
    }else{
      $new[$match[1]]=  [$match[2] => $value];
    }
  }else{
   $new[$key] = $value; 
  }
}

return $new;
}
