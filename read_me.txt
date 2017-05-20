##WHAT DOES THIS SOFTWARE DO?

It is a web application that runs on any web browser and allows you to handle your Linux based DNS, Web and Mail server remotely. It is similar to cPanel which is a graphical utility to manage linux servers.
It runs on port 80 and the best feature of this application is the easy graphical user friendly interface.


##WHY DO YOU NEED IT??

>It allows you manage your servers in very user friendly graphical manner. Few clicks and you will be able to host your website, manage your DNS server, create and delete users and groups and much more.
And all this can be done remotely, all u need is a web browser to run it.


##HOW TO RUN IT??

>Create a folder,(say cpanel) inside /.

>Change permissions as :
dcpanel rwx-rwx---- root apache 

>Extract and place all the files in /cpanel folder.

>Edit /etc/sudoers file
Under user privelage specification, append: 
APACHE ALL=(ALL) NOPASSWD: ALL

>Host cpanel.com, giving /cpanel directory as document root in apache virtual server

>Go to cpanel.com, and login with root user.

>Once you login, you can manage your servers easily.


##HOW IS THIS THING WORKING??

>It uses PHP codes to interact with the linux server. Some tasks are done directly through the PHP codes and for some a shell script is created, executed to accomplish the task and then deleted as soon as the task is done. All the Script handling is also done through the PHP codes only.
Just write the command inside `<command>` to execute on Linux.
