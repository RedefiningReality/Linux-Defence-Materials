# Common Attack Vectors
[John's Red Team Manual](https://docs.google.com/document/d/17W30A0wpB7lVTDb7SCjWs0lb9bMAjVR4B7Dp_c2rU2g/)

## FTP
- outdated service
- anonymous login
- plaintext login and data transfers
- insecure passwords

## SSH
- outdated service
- insecure passwords

## SMB
- outdated service
- anonymous login
- weak encryption
- insecure passwords

## SMTP
- outdated service
- VRFY or RCPT TO user disclosure
- plaintext login and data transfers
- insecure passwords

## HTTP
- outdated service
- web attacks (SQLi, FIV, FUV, XSS, CSRF, etc.)
  - check OWASP [vulnerabilities](https://owasp.org/www-community/vulnerabilities) and [attacks](https://owasp.org/www-community/attacks) lists

**Note:** There are so many, that as a defender, you'll just have to accept that you won't be able to find them all, at least in a competition environment. Set up good monitoring or a Web Application Firewall (WAF) or both. In a production environment, it's worth going through the OWASP [web security checklist](https://github.com/0xRadi/OWASP-Web-Checklist).

## HTTPS
- same as HTTP
- weak encryption

## SQL
- outdated service
- weak or nonexistent encryption
- insecure/default passwords

## Privilege Escalation
https://gtfobins.github.io/
- outdated distro
- outdated service
- bad sudo permissions
- bad file permissions (wrong ownership or rwx on file)
- SUID/SGID binaries
- SUID/SGID capability set on binary (check `getcap`)
[Linux Privilege Escalation Checklist on HackTricks](https://book.hacktricks.xyz/linux-hardening/linux-privilege-escalation-checklist) has a more complete list along with commands

## Persistence
- SSH authorized_keys
- user account
- service
- cron job
- profile and bashrc
- webshell (eg. PHP)
- backdooring an existing command (PATH hijacking)
[Linux Persistence on PayloadsAllTheThings](https://github.com/swisskyrepo/PayloadsAllTheThings/blob/master/Methodology%20and%20Resources/Linux%20-%20Persistence.md) has a more complete list along with commands
