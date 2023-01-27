sudo su

apt-get update

apt-get install apache2

sudo dpkg --configure -a

mv /var/www/

rm -rf html

mkdir html

cd html

git clone https://github.com/TsugawaNaoki0/search.git

mv search/* ./
