
htaccess : Fichier qui permet la configuration d'apache au niveau d'un r�pertoire

--------------------------------------------------------

Doit avoir la commande "AllowOverride" dans la configuration d'apache, par exemple :

AllowOverride All

Autrement... htaccess est ignor�

--------------------------------------------------------

�galement, le module mod_rewrite doit �tre activ� dans httpd.conf

Commande bash : a2enmod rewrite