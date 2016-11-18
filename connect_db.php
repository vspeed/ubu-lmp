# Connect on 'localhost' for user 'chief'
# with password 'Password#1234567890' to database 'site_db'

$dbc = mysqli_connect
('localhost' , 'chief' , 'Password#1234567890' , 'site_db')
OR die
(mysqli_connect_error() ) ;
# Set encoding to match PHP script encoding.
mysqli_set_charset( $dbc , 'utf8' )