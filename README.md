# TP - Sécurité Réseau - 4IF

## Contributors

- Corentin GIRAUD  
- Matthieu VALVIN 
- Victor BONIN
- Baptiste DUBARRY
- Romain GOUTTE-FANGEAS
- Mathieu POURBAIX
- Laurie SORDILLON
- Paul-Emmanuel SOTIR

Every team member is studing (have been studing) computer science in the french engenering school INSA Lyon.

## Purpose

This project deals with file upload vulnerability in web based application coded with `php`. It provides two different environments (an attacker virtual machine and a web server virtual machine) in order to discover and exploit this vulnerability.

__/!\ For education purpose only__

## Usage

### Pre-Requisites

You need to install the following software:

- [Vagrant](https://docs.docker.com/install/)
- [Chef Development Kit](https://downloads.chef.io/chefdk)
- [Berkshelf](https://github.com/berkshelf/berkshelf)
- [VirtualBox](https://www.virtualbox.org/)
- [Git](https://git-scm.com/)

### Clone the repository - Setup Virtual Box

You have to clone our repo using this following command:

`git clone https://github.com/kistora/TP-SERE.git`

You must configure host-only network with VirtualBox called `vboxnet0`. You can find more information [here](https://blogs.oracle.com/scoter/networking-in-virtualbox-v2).

### Launch the virtual machine through vagrant

#### Attacker VM

Go to attacker folder:

`cd VMs/attacker`

Launch the VM by typing the following command:

`vagrant up`

It could take a long time depend on your internet connection (~1.6go)

Once it is open, you could change VM resolution using: `Menu -> Preferences -> Monitor Settings`.

#### Vulnerable Web Server VM

Go to vulnerable web server folder:

`cd VMs/vulnerable-web-server`

Launch the VM by typing the following command:

`vagrant up`

It could take a long time depend on your internet connection (~1go)

### Check the google slide and have fun

Have fun during our [great presentation reading](https://docs.google.com/presentation/d/1Pj7vlkYo4XZdgI_VLuQKBqFX3w56eWvO7N-lTY_CPpA/edit?usp=sharing).

## References

https://null-byte.wonderhowto.com/how-to/upload-shell-web-server-and-get-root-rfi-part-1-0162818/

https://null-byte.wonderhowto.com/how-to/upload-shell-web-server-and-get-root-rfi-part-2-0162854/

http://www.securityidiots.com/Web-Pentest/hacking-website-by-shell-uploading.html#cententtype-varification-bypass
