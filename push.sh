sshpass -p $(cat ~/konfig/mbc/pass) rsync -rv --exclude='push.sh' * cms@max-bense.ub.uni-stuttgart.de:/var/www/mbc/themes/stuttgart/

