##WHAT IS NETMIN.COM?

Netmin is a web application that runs on any web browser and allows you to handle your Linux based DNS, Web and Mail server remotely. Netmin is similar to webmin or cpanel which are graphical utilities to manage linux servers. 
Netmin runs on port 80 and the best feature of this application is the easy graphical user friendly interface.

##WHY DO I NEED IT??

>Netmin allows you manage your servers in very user friendly graphical manner. Few clicks and you will be able to host your website, manage your DNS server, create and delete users and groups and much more.
And all this can be done remotely, all u need is a web browser to run it.

##Cool!! BUT HOW TO RUN IT??

>Create a folder,(say netmin) inside /.

>Change permissions as :
dnetmin rwx-rwx---- root apache 

>Extract and place all the files in /netmin folder.

>Edit /etc/sudoers file
Under user privelage specification, append: 
APACHE ALL=(ALL) NOPASSWD: ALL

>Host netmin.com, giving /netmin directory as document root in apache virtual server

>Go to netmin.com, and login with root user.

>Once you login, you can manage your servers easily.


##I LOVED IT. BUT HOW IS THIS THING WORKING??

>The netmin uses php codes to interact with the linux server. Some tasks are done directly through the php codes and for some a shell script is created, executed to accomplish the task and then deleted as soon as the task is done. All the Script handling is also done through the php codes only.
Just write the command inside `<command>` to execute on linux. :D

##IMPRESSIVE STUFF!! WHO IS THIS GREAT DEVELOPER??

> This application was developed by : 
AYUSH GARG
SRM UNIVERSITY
EMAIL : ayushgarg@live.com

