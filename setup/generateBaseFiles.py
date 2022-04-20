#!/usr/bin/python3

import os
import shutil

os.mkdir('app/Http/Requests')
os.mkdir('app/Http/Repositories')
os.mkdir('app/Http/Services')
os.mkdir('app/Http/Services/Base')
os.mkdir('app/Http/Services/Feature')

src_file = open('setup/Requests/Request.php', 'r')
f = open('app/Http/Requests/Request.php', 'w+')
f.write(src_file.read())
f.close()

src_file = open('setup/Repositories/Repository.php', 'r')
f = open('app/Http/Repositories/Repository.php', 'w+')
f.write(src_file.read())
f.close()

src_file = open('setup/Services/Service.php', 'r')
f = open('app/Http/Services/Service.php', 'w+')
f.write(src_file.read())
f.close()

src_file = open('setup/Services/ResponseService.php', 'r')
f = open('app/Http/Services/ResponseService.php', 'w+')
f.write(src_file.read())
f.close()
