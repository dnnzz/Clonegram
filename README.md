# Clonegram
Laravel framework Instagram Clone 
Still working on authorization from admin panel so you can give admin permission on tinker.
Open command line and type this
$ php artisan tinker
>>> use App\User;
>>>User::where('email', 'yourmail@mail.com')->update(['type' => 'admin']);
