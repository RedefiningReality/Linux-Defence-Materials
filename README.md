# Linux Defence Materials
A repository of helpful materials related to Linux defence
This was originally created for the [NCAE Cyber Games competition](https://www.ncaecybergames.org) in an effort to make Illinois Institute of Technology's resources public and share our knowledge with the community, in the spirit of the competition. However, it's certainly not limited to that scope. I still use and make occasional edits to my Linux Commands Cheat Sheet to this day. Enjoy, and feel free to reach out to me with any feedback or questions!

### Repository Contents
If you're just getting started, check out the [NCAE Cyber Sandbox Tutorials](https://www.youtube.com/playlist?list=PLqux0fXsj7x3WYm6ZWuJnGC1rXQZ1018M) on YouTube that will give you an introduction to using Linux and Linux defence concepts.

**Note:** All the links to PDFs on this README (with the exception of NCAE checklists) are to the original Google Docs, which may be easier to read than the PDF versions in GitHub. Also, if you open them on a PC you get a nice document outline on the side that makes them very easy to navigate! Also also, I cannot guarantee the PDFs in this repo stay up-to-date, so I highly recommend using the Google Docs versions. **tl;dr use the links in this README**
#### [Linux Terminal](Linux Terminal/)
- [Linux Commands Cheat Sheet](https://docs.google.com/document/d/1vJxoHrjW607NJDLC1Zln1llrEIqrS6Ea3j9ihJTdblg/) ⇒ all the actually useful Linux commands, including the ones mentioned in the NCAE Cyber Sandbox Tutorials
  - For anyone who wants it, the Windows counterpart is here: [Windows Commands Cheat Sheet](https://docs.google.com/document/d/1CGgADAOZQuMXAyzXVeXRNhQ_PPBYliMXCy-4RNE0UMw/)
- [Printing Tricks](Linux Terminal/Printing Tricks.md) ⇒ commands related to working with command line output: grep, sed, cut, tr, etc. This is also linked in the Linux Commands Cheat Sheet for convenience
- [Keyboard Shortcuts](Linux Terminal/Keyboard Shortcuts.md) ⇒ window management, navigating history, and rerunning previous commands with select modifications, all through the command line
#### [Linux Defence](Defence/)
- [Attack Vectors](Defence/Attack Vectors.md) ⇒ attack vectors by service and the most basic privilege escalation attacks
- [Defence Checklist](Defence/Defence Checklist.md) ⇒ Illinois Tech's approach to cyber defence competitions
- [Cloing Ports (the right way)](Defence/Port Closing Flowchart.png) ⇒ I'm tired of people thinking a firewall is the solution to all their problems... actually stop your services and fix the vulnerability!
- [Linux Services and Defence Cheat Sheet](https://docs.google.com/document/d/1DikLS0jAhuflCj3bOlbh5ZIJE6Ou4WkyIxMN0t2ZqU0/)
#### [NCAE Checklists](NCAE Checklists/)
- [Linux Checklist](NCAE Checklists/Linux Checklist.pdf) ⇒ the "boilerplate" Linux defence checklist Illinois Tech uses for competitions - we take this one and use it to create separate checklists for each machine
- [DNS Configuration](NCAE Checklists/DNS Configuration.pdf) ⇒ bind9 is a mess, so here are all the changes you need to make written out
- [Recovery Plan](NCAE Checklists/Recovery Plan.pdf) ⇒ booting into recovery to reset root password and making backups of sensitive files (eg. website source code)
#### [Practice Materials](Practice Materials/)
- [iptables Template](Practice Materials/iptables-template.sh) ⇒ iptables is even yuckier than bind9, so here's a template you can follow when setting up iptables rules
  - iptables is the "lowest-level" firewalling solution, and that gives it some distinct advantages over ufw or firewalld - namely, red team can just remove those when they inevitably compromise you
- [Illinois Tech Practice Range Network Diagram](Practice Materials/practice.jpg) ⇒ the practice network Illinois Tech gave to students in 2023 so they could prepare for the competition - each student got their own unique copy to play around with
  - The actual infrastructure we use for hosting our practice range is fully documented [here](https://github.com/RedefiningReality/Proxmox-Remote-Management/blob/main/Web.md), and if you're a visual learner you can watch [this series](https://youtube.com/playlist?list=PLSpsCUl2cY8at6Dr0c28G6-yC1exBnqrR) on YouTube instead.

If you want to play around with some Python scripts I wrote for logging all command line history and monitoring logins, feel free to check out my [Linux Defence Scripts](https://github.com/RedefiningReality/Linux-Defence-Scripts) repo. They're pretty basic, and if I were to rewrite them now I'd probably take a different approach, but they work!
