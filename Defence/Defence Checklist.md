# Cyber Defence Checklist
## The Big Idea
1. Determine what services should be accessible.
2. Block (firewall) or stop services that shouldn't be.
3. Secure services that should be.
  a. Update to latest version
  b. Check [Attack Vectors](../Attack Vectors.md)
4. Check for privilege escalation [attack vectors](../Attack Vectors.md).

**Note:** If server is really outdated, don't worry about 4 because there's nothing you can do *unless* there's potential to escalate through a service.

## The Complete Checklist
- Change root password
- Remove unneeded users
- Check sudo permissions
- Change service users' shell to nologin
- Configure IP address
- Upgrade outdated packages
- Apply host firewall
- Check cron jobs
- Check systemd timers
- Check open ports
- Check startup services
- Check running services
- Check running processes
- Backup required directories
