# php-webLine
PHP command line on a website

Disclaimer: Use on your own websites or ones you have permission to

For this to work you need a website or web application that is vulnerable to PHP file upload.

![](/assets/vulnerable_page.png)

Next you will need to upload the webLine.php payload.

![](/assets/upload.png)

![](/assets/uploaded.png)

Once you have uploaded the PHP file you will need to navigate to it, and once you have navigated to the PHP file you should be greeted with:

![](/assets/payload.png)


From this page you can do a few tings such as execute commands at the permission level of the user account running the program that hosts the web application.

![](/assets/lsin.png)
![](/assets/lsout.png)

Or you could upload other files without restrictions or sanitization.

![](/assets/fileup.png)
![](/assets/fileuploaded.png)
![](/assets/file.png)
