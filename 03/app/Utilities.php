<?php

namespace OOP;

class Utilities{


    static public function UserInfoBlock($data){

        echo "<ul>";

        foreach($data as $key=>$value){

            if(is_array($value)){
                foreach($value as $key=>$value){
                    echo"<li>$value</li>";
                }
            }
            else{
                echo"<li>$value</li>";
            }

        }

        echo"</ul>";

    }

}