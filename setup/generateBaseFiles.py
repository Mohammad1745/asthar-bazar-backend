#!/usr/bin/python3

import os
import shutil
import subprocess

directories = (
    'app/Helpers',
    'app/Http/Controllers/Web',
    'app/Http/Repositories',
    'app/Http/Requests',
    'app/Http/Requests/Web',
    'app/Http/Requests/Web/Auth',
    'app/Http/Services',
    'app/Http/Services/Base',
    'app/Http/Services/Feature',
    'app/Http/Services/Feature/Auth',
    'routes/web'
)
for dir in directories:
    if not os.path.exists(dir):
        os.mkdir(dir)

files = (
    'app/Helpers/coreConstants',
    'app/Helpers/helper',
    'app/Http/Controllers/Web/SocialAuthController',
    'app/Http/Repositories/Repository',
    'app/Http/Repositories/UserRepository',
    'app/Http/Requests/Request',
    'app/Http/Requests/Web/Auth/SocialLoginRequest',
    'app/Http/Services/Service',
    'app/Http/Services/ResponseService',
    'app/Http/Services/Base/UserService',
    'app/Http/Services/Feature/Auth/SocialAuthService',
    'routes/web/auth'
)
for file in files:
    if not os.path.exists(file+'.php'):
        src_file = open('setup/'+file+'.txt', 'r')
        f = open(file+'.php', 'w+')
        f.write(src_file.read())
        f.close()

subprocess.run(["composer","require","laravel/socialite"])
print('Laravel Socialite Installed')
subprocess.run(["composer","require","laravel/passport"])
print('Laravel Passport Installed')
subprocess.run(["php","artisan","migrate"])
print('Migration Completed')
subprocess.run(["php","artisan","passport:install"])
print('Laravel Passport HasApiToken Added to User.php')
subprocess.run(["php","artisan","passport:keys"])
