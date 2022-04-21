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
    'app/Http/Services/Feature/Auth'
)
for dir in directories:
    if not os.path.exists(dir):
        os.mkdir(dir)

files = (
    '/Helpers/coreConstants',
    '/Helpers/helper',
    '/Http/Controllers/Web/SocialAuthController',
    '/Http/Repositories/Repository',
    '/Http/Repositories/UserRepository',
    '/Http/Requests/Request',
    '/Http/Requests/Web/Auth/SocialLoginRequest',
    '/Http/Services/Service',
    '/Http/Services/ResponseService',
    '/Http/Services/Base/UserService',
    '/Http/Services/Feature/Auth/SocialAuthService'
)
for file in files:
    if not os.path.exists('app'+file+'.php'):
        src_file = open('setup'+file+'.txt', 'r')
        f = open('app'+file+'.php', 'w+')
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
