<?php
//How to pass variable which can be null in Route?


Route::get('gegonota/{gid}/{cid}/{nid?}', [
    'uses' => 'GegonosController@index', 
    'as' => 'gegonota'
]);

http://localhost:8000/gegonota/?gid=&cid=&nid=


//In a controller
public funtion index()
{
    //put them in an array
    $my_variables = request()->only(['gid', 'cid', 'nid']);

    //or this way
    $gid = request()->get('gid');
    $cid = request()->get('cid');
    $nid = request()->get('nid');

   //they are default to null if not existing or have no value
}


?>