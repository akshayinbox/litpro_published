
## LiteracyPro: Band + Album Management

## Prepare
To run, please make sure your server's (Apache's) document root is set to the public/ directory exactly.
Also, please edit your .env file to update the Web Server as well as MySQL ports/credentials, if applicable.

## Run
1. Running "php artisan migrate:refresh --seed" should repopulate the tables. This step has been done for you.
2. Simply navigate to the web server's document root and voila, you should see a list of bands!

## Notes
1. Sorting on tables is currently client-side (JS-based) so as to provide better UX. Of course, the Laravel-ish way of doing it would be to convert the model object to a collection (e.g. $collection = collect(Band::all()); ) and invoking a sortBy(); or sortByDesc(); on it ($sorted_bands = $collection->sortBy('name'); ).

2. AJAX has not been used due to no such requirement(s) provided.

Thank you for this awesome project! Enjoy!

## Credits
Built with Laravel 5.3, Twitter Bootstrap, Datatables ...and &hearts;
