# Cyber Defence Checklist
## The Big Idea
1. Determine which services should be accessible.
2. Block (firewall) or stop services that shouldn't be.
3. Secure services that should be.
    1. Update to latest version
    2. Check [Attack Vectors](Attack%20Vectors.md)
4. Check for privilege escalation [attack vectors](Attack%20Vectors.md).
5. Prepare for active defence. (IDS/IPS and/or Wireshark)

**Note:** If server is really outdated, don't worry about 4 because there's nothing you can do *unless* there's potential to escalate through a service.

## The Complete Checklist
- Change root and user passwords
- Remove unneeded users
- Check group membership and sudo permissions
- Change service users' shell to nologin
- Upgrade outdated packages
- Apply host firewall
  - I'd use `ufw`, `firewalld`, `iptables`, `nftables` in that order
- Check cron and anacron (if applicable) jobs
  - `/etc/crontab`, `/etc/cron.allow`, `/etc/cron.*` directories and `/var/spool/cron`
  - same files/folders as above but replace `cron` with `anacron`
  - For competitions, easiest is to disable the cron service with `systemctl disable cron` or `crond`
- Check systemd timers
- Configure and secure externally-accessible services (depends on service)
  - See [attack vectors](Attack%20Vectors.md) and [services/defence cheatsheet](Linux%20Services%20and%20Defence%20Cheat%20Sheet.pdf)
- Backup required directories both locally and remotely
  - Easiest way is to `tar` zip the directory then access remote backup server through `sftp`
- Set up [command line auditing](Auditing%20Commands.md)
- Start Wireshark capture

If in a competition, I would make services accessible at this point because your external attack surface is minimised. The rest can be done on the fly.
- Check open ports - consult the [port closing flowchart](Port%20Closing%20Flowchart.png)
- Check startup services
- Check running services
- Check running processes
- Check additional privilege escalation attack vectors
  - world readable/writable dirs/files
  - writable files for each user
  - SUID/SGID binaries

### Free Defence Solutions
*probably too advanced for limited-time competitions like NCAE Cyber Games, but if you're feeling adventurous, here are some ideas*
- antivirus: [ClamAV](https://www.clamav.net)
- network IDS/IPS: [Snort](https://www.snort.org)
- SIEM: [Wazuh](https://wazuh.com)
- WAF: [ModSecurity](https://github.com/owasp-modsecurity/ModSecurity)
