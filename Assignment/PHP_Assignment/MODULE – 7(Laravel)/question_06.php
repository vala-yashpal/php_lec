<?php
    //In Employee Controller‟s action Call Middleware.

    public function __construct()
    {
        // Middleware only applied to these methods
        $this->middleware('loggedIn', [
            'only' => [
                'update' // Could add bunch of more methods too
            ]
        ]);
    }

?>