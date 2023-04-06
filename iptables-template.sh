#!/bin/bash
iptables -F 

# Only allow incoming traffic on specified ports 
iptables -A INPUT -m conntrack --ctstate RELATED,ESTABLISHED -j ACCEPT 
# iptables -A INPUT -p tcp --dport [port] -j ACCEPT 
# repeat as necessary for desired open TCP ports 
# iptables -A INPUT -p udp --dport [port] -j ACCEPT 
# repeat as necessary for desired open UDP ports 
iptables -A INPUT -p icmp --icmp-type 8 -j ACCEPT 
iptables -A INPUT -i lo -j ACCEPT 
iptables -P INPUT DROP

# Block all outgoing traffic except for established connections 
iptables -A OUTPUT -m conntrack --ctstate RELATED,ESTABLISHED -j ACCEPT 
# iptables -A OUTPUT -p tcp --dport [port] -j ACCEPT 
# repeat as necessary for desired open TCP ports 
# iptables -A OUTPUT -p udp --dport [port] -j ACCEPT 
# repeat as necessary for desired open UDP ports
iptables -A OUTPUT -o lo -j ACCEPT 
iptables -P OUTPUT DROP
