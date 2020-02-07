<?php

class innoraft_services {
    

    public $url;       //api url
    
    //-------------------------------initializing the url-----------------//
    function __construct($url){
        $this->url =  $url;
    }

    //-------------------------fetching and giving output from api data-----------------//
    public function data_fetch_and_display()
    {
            require './vendor/autoload.php';
            $client = new GuzzleHttp\Client();
            $data = $client->request('GET',$this->url);
            // echo $data->getStatusCode();
            
            $body = $data->getBody();

            $json_data = json_decode($body);
            
            $index = 0;                              //using for each data indexing in the output
            echo "<div class='container'>";
            foreach($json_data->data as $key=>$value){ 
                $index +=1;
                echo "<div class='blocks'>";
                    echo "<div>";
                        echo "<div class='heading'>";
                            echo "<span class='index'>".($index)."</span>";
                            echo "<h3 class='head'>  ".$json_data->data[$key]->attributes->title."</h3>";
                        echo "</div>";
                        print_r($json_data->data[$key]->attributes->body->summary);
                        if($json_data->data[$key]->attributes->field_services->value != null)
                            echo $json_data->data[$key]->attributes->field_services->value;
                    echo "</div>";
                $url = $json_data->data[$key]->relationships->field_image->links->related->href;
                $data1 = $client->request('GET',$url);
                $body2 = $data1->getBody();
                $json_data2 = json_decode($body2);
                $img_src = "https://ir-revamp-dev.innoraft-sites.com".$json_data2->data->attributes->uri->url;  
                echo "<img src= '$img_src'></br>";
                echo "</div>";
            }
            echo "</div>";
    }
}

//---------------------------object calling--------------------------------------//
$obj = new innoraft_services("https://ir-revamp-dev.innoraft-sites.com/jsonapi/node/services");
$obj->data_fetch_and_display();

?>