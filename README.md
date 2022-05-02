## INSTALL

! Regular Laravel Framework Installation Flow !

The install process is straightforward, like default laravel style.

1- Clone git repository
2- checkout our working or current dev/master branch

3- composer install or composer update
4- npm install & npm run dev (alternatively: npm run watch)

5- run migrations: php artsian migrate
6- run seeders:
    php artisan db:seed --class=CreateUserSeeder && \
    php artisan db:seed --class=CreateCompanySeeder && \
    php artisan db:seed --class=CreateCompaniesDataTypeSeeder && \
    php artisan db:seed --class=CreateEmailProviderSeeder && \
    php artisan db:seed --class=CreateUsersFootprintSeeder

7- (optional) php artsian storage:link

## Company Data - DB & static assets

In Production: 
  Company Data is provided and maintained in external DB & static file server (incl. assets ,like logos, ...)
  
  ! The needed Company related tables are linked (synced) into project db !
  
  -> static file server url: data.ownext.com

In Development:
  e.g. spinup / provide (local) data.ownext.com with assets OR change seeders
  
