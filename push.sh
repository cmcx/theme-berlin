sshpass -p $(cat ~/konfig/mbc/pass) rsync -rv --exclude='push.sh' --exclude='pushl.sh' --exclude='.sass-cache' * cms@max-bense.ub.uni-stuttgart.de:/var/www/mbc/themes/stuttgart/

