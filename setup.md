sudo su

apt-get update

apt-get install apache2

sudo dpkg --configure -a

git clone https://github.com/TsugawaNaoki0/search.git

mv search/* ./
