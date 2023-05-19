<?php
    // Create Custom Macro For search User


    use Illuminate\Database\Eloquent\Builder;

// ...

Builder::macro('search', function(string $attribute, string $searchTerm) {
   return $this->where($attribute, 'LIKE', "%{$searchTerm}%");
});


use Illuminate\Database\Eloquent\Builder;

// ...
Builder::macro('search', function($attributes, string $searchTerm) {
foreach(array_wrap($attributes) as $attribute) {
$this->orWhere($attribute, 'LIKE', "%{$searchTerm}%");
   }

return $this;
});

// searching a single column

User::search('name', $searchTerm)->get();

// searching on multiple columns in one go
User::query()
->search('user', 'moom')
->search('email', 'gmail')
->get();
?>