# HackTheBox: UnderPass Machine Writeup
-  [Machine Link](https://app.hackthebox.com/machines/UnderPass)
## Summary

I approached this HTB machine by IP address enumeration using nmap that revealed open SSH, HTTP ports and SNMP ports.

::: tip
Add Machine's IP to /etc/hosts
If the IP you received was 1.1.1.1
:::

then
```bash
echo "1.1.1.1 underpass.htb" | sudo tee -a /etc/hosts
```
## Enumeration
I have used nmap to scan open ports on the UnderPass machine
```shell
nmap -F underpass.htb
```
```console
Starting Nmap 7.94SVN ( https://nmap.org ) at 20xx-xx-xx xx:xx UTC
Nmap scan report for underpass.htb (10.10.11.48)
Host is up (0.034s latency).
Not shown: 98 closed tcp ports (conn-refused)
PORT   STATE SERVICE
22/tcp open  ssh
80/tcp open  http

Nmap done: 1 IP address (1 host up) scanned in 0.17 seconds
```
::: info
In my case, 10.10.11.48 was the UnderPass IP
:::
This initial scan revealed that SSH (port 22) and HTTP (port 80) are open. Then I proceeded with a UDP scan to reveal if some UDP ports are open.
```shell
sudo nmap -F -sU underpass.htb
```
::: warning
nmap requires sudo to run UDP scan.
:::
```console
Starting Nmap 7.94SVN ( https://nmap.org ) at 2025-03-07 07:15 WIB
Nmap scan report for underpass.htb (10.10.11.48)
Host is up (0.11s latency).
Not shown: 58 closed udp ports (port-unreach), 41 open|filtered udp ports (no-response)
PORT    STATE SERVICE
161/udp open  snmp

Nmap done: 1 IP address (1 host up) scanned in 56.23 seconds
```
::: info
This machine is still active. Full writeup will be published once the machine is retired.
:::