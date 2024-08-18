# SETUP GUIDE:
- git clone https://github.com/saseksasek/tolnagro_test.git
- cd tolnagro_test
- composer install
- npm i
- cp .env.example .env
  
- update the .env file:
  ```
  # Database Configuration
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password```

  # Email Configuration
    MAIL_MAILER=smtp
    MAIL_HOST=127.0.0.1
    MAIL_PORT=1025
    MAIL_FROM_ADDRESS=example@example.com
    MAIL_FROM_NAME="YourAppName"

- php artisan key:generate  
- php artisan migrate
- npm run dev
- php artisan serve


# Send emails:
- php artisan emails:send

To send the emails in every minute you can run "while true; do php artisan schedule:run; sleep 60; done" command in the terminal for testing. For production you can set up a cron job on the serve to run the command.  


