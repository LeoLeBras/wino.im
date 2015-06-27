@servers(['web' => 'winoimkbhf@ftp.cluster011.ovh.net'])

@task('deploy', ['on' => 'web'])
    cd buisiness
    git pull origin master
    php artisan migrate
@endtask