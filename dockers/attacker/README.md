# Attacker docker

## Acknowledgment

This docker is based on [Remnux Metasploit Docker](https://hub.docker.com/r/remnux/metasploit/).

## Setup

Based on [Doyler.net tutoriel](https://www.doyler.net/security-not-included/metasploit-docker-container)

* Run `sudo ./launch.sh`
* When your docker is installed, you've got a root shell. But during installation, some issues could append
* Perform the following command to complete the installation ruby installation `rvm install ruby-2.3.3`
* Perform the following command to fix git usage `git config --global url."https://".insteadOf git://`

## Installation test

* Type `msfconsole` to open the metasploit framework console
