<br/>
<h1 align="center">
  plexDash
</h1>

<p align="center">
  A system performance dashboard for plex-servers -- linux only!
</p>

<br/>
<p align="center">
    <img width="80%" alt="Linux Dash screenshot" src="http://i.imgur.com/oFMVOEC.png">
</p>

<br/>

## Features
* A beautiful & simple web-based dashboard for monitoring a plex server
* Passwort protectet! 	&rArr;  **Default password:  plexDash**
* Live graphs, refresh-able widgets, and a big range of modules
* Drop-in installation for Linux Servers!

## Example Installation for Ubuntu

1. Install apache2 and php5: <code>sudo apt-get install apache2 php5 libapache2-mod-php5 php5-mcrypt</code>
2. Go to the html location: <code>cd /var/www/html</code> 
3. Download the git repo: <code>git clone https://github.com/deepwather/plexDash.git</code>
4. Set the rigth permissions: <code>chmod -R 775 /var/www/html/plexDash</code>
5. And as well the right owner: <code>chown -R www-data:www-data /var/www/html/plexDash</code>
6. Enjoy! Login over browser, enter default password: plexDash (To change the default pw, edit <code>config/login.php</code>)

## Support

The following distributions are supported:
* Arch
* Debian 6,7
* Ubuntu 11.04+
* Linux Mint 16+
* CentOS 5, 6
* openSUSE
