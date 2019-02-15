<?php


class Demo
{
     public function makeDemo($data) {

         if(isset($data['btn'])){

             $first  = $data['first_number'];
             $end   = $data['last_number'];
             $choice = $data['check'];

             $res = "";
             if($first <= $end){
                 for($i = $first; $i <= $end; $i++)
                 {
                     if($i % 2 != 0 && $choice == "Odd")
                     {
                         $res .= $i." ";
                     }
                     else if($i % 2 == 0 && $choice == "Even")
                     {
                         $res .= $i." ";
                     }
                 }
                 return $res;
             }else{
                 for($i = $first; $i >= $end; $i--)
                 {
                     if($i % 2 != 0 && $choice == "Odd")
                     {
                         $res .= $i." ";
                     }
                     else if($i % 2 == 0 && $choice == "Even")
                     {
                         $res .= $i." ";
                     }
                 }
                 return $res;
             }

         }
     }
}