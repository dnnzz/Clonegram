# Clonegram
Laravel framework Instagram Clone 
Still working on authorization from admin panel so you can give admin permission on tinker.
Open command line and type this :
<br>
$ php artisan tinker
<br>
use App\User;
<br>
User::where('email', 'yourmail@mail.com')->update(['type' => 'admin']);
