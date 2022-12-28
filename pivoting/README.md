#Pivoting

The example pingSweep.xml is an MSBuild inline task implementation of [https://morgantechspace.com/2015/07/csharp-check-if-machine-is-online-or-offline.html](https://morgantechspace.com/2015/07/csharp-check-if-machine-is-online-or-offline.html)

## Uses

In order to gain command execution using PHP you must be able to upload files to the webserver. Once you have uploaded a PHP file that allows you to execute commands you can begin to upload more malicious files that you can execute using the PHP command shell tool. Many webservers will not allow EXE files to run on them that are not signed by reputable companies, however we can bypass this protection using MSBuild. I have included an example MSBuild inline task payload that will simply attempt to ping all IP addresses within the /24 cidr range of the IP address that is provided to it.

Ex
```
C:\Windows\Microsoft.NET\Framework\v4.0.30319\MSBuild.exe "pingSweep.xml" /property:"IP=\"10.0.0.0\""
```
