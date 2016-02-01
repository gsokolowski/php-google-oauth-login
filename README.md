php-google-oauth-login

Code which is in index.php it goes into you webpage index file
This way you can make your website accessible only to user who
signs in using Google OAuth

You also collect data about user like that:
return $this->oauth2->userinfo->get();