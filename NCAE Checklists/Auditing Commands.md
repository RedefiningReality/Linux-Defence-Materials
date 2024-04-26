# Trace Method
```sh
sudo touch /var/log/commands.log
sudo chmod 622 /var/log/commands.log
sudo chattr +a /var/log/commands.log
```
edit `/etc/bashrc` or `/etc/bash.bashrc`, and add the following content
```sh
function log_command
{
  declare COMMAND
  COMMAND=$(fc -ln -0 | awk '{$1=$1};1')
  echo "`date +'%b %d %H:%M:%S'` - $$ `whoami` ${PWD} ${COMMAND}" >> /var/log/commands.log
}
trap log_command DEBUG
```
remove all shells that aren't bash:
```sh
sudo unlink /bin/sh
sudo unlink /usr/bin/sh
sudo ln -s bash /bin/sh
sudo ln -s bash /usr/bin/sh
grep -v "/bash" /etc/shells | sudo xargs -d '\n' rm  # get each line in /etc/shells that doesn't contain "/bash", then remove those files
sudo sed -i '/\/bash/!d' /etc/shells
```
commands from all users will be logged to /var/log/commands.log, which can only be read by root (`sudo cat /var/log/commands.log`)
- search with `sudo grep <string> /var/log/commands.log`
  - `<string>` can be a process ID, user, command, etc
