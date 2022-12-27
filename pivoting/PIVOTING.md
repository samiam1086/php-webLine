#Pivoting

## Uses

Once you have obtained a commaind shell on a webserver you can upload files and execute them. Many webservers will not allow EXE files to run on them that are not signed by reputable companies, however we can bypass this protection using MSBuild. I have included an example MSBuild inline task payload that will simply attempt to ping all IP addresses within the /24 cidr range of the IP address that is provided to it.

Ex
```
C:\Windows\Microsoft.NET\Framework\v4.0.30319\MSBuild.exe "pingSweep.xml" /property:"IP=\"10.0.0.0\""
```
