# Common Attack Vectors

### FTP
- outdated service
- anonymous login
- plaintext data transfers
- insecure passwords

### SSH
- outdated service
- insecure passwords

### SMB
- outdated service
- anonymous login
- outdate encryption
- insecure passwords

### HTTP
- outdated service
- web attacks (SQLi, FIV, FUV, XSS, CSRF, etc.)

**Note:** There are so many, that as a defender, you'll just have to accept that you won't be able to find them all. Set up good monitoring or a Web Application Firewall (WAF).

### HTTPS
- same as HTTP
- outdated encryption

### Privilege Escalation
https://gtfobins.github.io/
- outdated distro
- outdated service
- bad sudo permissions
- bad file permissions (wrong ownership or rwx on file)
- SUID/SGID binaries
- SUID/SGID capability set on binary (check `getcap`)
