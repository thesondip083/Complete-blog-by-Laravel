@if(count($errors)>0)
     
     <ul class="list-group">
         @foreach($errors->all() as $error)
           <li class="list-group-item text-danger">
               {{ $error }}
           </li>
         @endforeach
     </ul>
   @endif


   <!--
    MethodNotAllowedHttpException means route is not defined properly....check get /post 
   ->


<!--    419
Sorry, your session has expired. Please refresh and try again.

 GO HOME

check the CSRF token in the form -->


<!-- admin profile which is seeded by php artisan db:seed cannot be updated..i dont know why -->



<!--
The payload is invalid. 
encrypt decrypt thikmoto deya hoinai
-->


<!--
 Laravel 5.5 Invalid MailChimp API key `` supplied.
  php artisan config:clear
  php artisan config:cache
-->



<!--
 Method Illuminate\Database\Eloquent\Collection::delete does not exist.

 https://stackoverflow.com/questions/11358849/laravel-innodb

 edit your /config/database.php file, search for mysql entry and change:
'engine' => null,
      to'
 engine' => 'InnoDB',
This saves you from adding $table->engine = "InnoDB"; for each of your Schemas ;)

-->


<!--panel in bootstrap 4 is not working anymore.It is replaced by card

  https://getbootstrap.com/docs/4.0/components/card/

-->