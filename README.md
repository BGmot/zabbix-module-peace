# zabbix-module-peace
Written according to Zabbix official documentation[<https://www.zabbix.com/documentation/current/manual/modules>](https://www.zabbix.com/documentation/current/en/devel/modules/file_structure)

A Zabbix module to replaces 'Z' in favicon and in main menu when it is in compact mode.

The look without the module:

![screenshot](screenshots/screenshot-before.png)

The look with the module installed and activated:

![screenshot](screenshots/screenshot-after.png)

# How to use

IMPORTANT: pick module version according to Zabbix version:
| Module version | Zabbix version |
|:--------------:|:--------------:|
|     v1.0.1     |    < 6.4       |
|     v2.0.0     |     6.4        |

1.a. Create a folder in your Zabbix server modules folder (by default /usr/share/zabbix/modules) and copy contents of this repository into that folder.

*** OR ***

1.b. As root execute following command from your Zabbix server modules folder (by default /usr/share/zabbix/modules:
```
echo 'H4sIAAAAAAAAA+1YX2gcRRjf1Jz1tgaFaogiOFmke0d6e7eX+yN3uTRpUptoW2LTl7QXk729udvp
7e1sd2fzpzESiy8F8dGHEKEgVRERhDwo+KAPpSAieReqTwWR4kNr9aEVZ3bvT2rSXMWQtLi/sDsz
3/fN92e+++a7y3mlUEBzkSouOjqMmFBRYVSxbUjsKLddiFGkk0l3pPjn6M7lRDwdT8vJ3l5KlxOp
dJoDyW3zYAs4NlEsADgLY7KVXCv+I4rz989/SZlBKjamnJJEx/9ggyU4lUjcN/+JWG89/6mUzPKf
TsoyB2LbFuUW+J/nn+Pa6N/AwNP03c7doOtO+lwcO3G0g3+ep9OO0ZHhk3QcYM8Tj9P3p+jcNTqs
jg4PnppbufHjFx17Xn/ym7U3Se7X2HP7r73w/eBe9Wvhdvv7z16+aL3x20Lq5tqe5T1a2/G21aXS
4lLl+p3Vd4p3258Z2KfxlwKJQJP7EXd6YJyLXAovda6tZ1dKv09M//DHzfzk9N32z35qe4AtNfb1
Wy9/tdK0fUi+Enw1eiWVZ4GPHjkx/Pnh6Qu7dfAPBbaof6diKchAihEp6Uo5Ek/MxROSaZT/tY1W
9U/LvVH/clrmYnE5lkr69b8T2KTSu9jjVvrPs7k/6RA0RyZsjtu3nz1t3PIKk4iy8h+5qk53BR7r
6Ip8995fH18OHFu9/e0ngQ87x7pfvPPl1fTyU69Eun7pfPfC23u5WE+AvNbxwS1m1K+8hwab1X9V
MVAJ2kQ6a2NjG2y07P+99f4fS6YTadr/U7Lf/3cGC3xQqOd7agZaNsKGkAHyQUpHRToT3M+EwNaG
UoWMMk6wCWYVq9ulKg7RsMXoR2bK0JgHE46latCoYJddhLZqIZN4eoWT0NSpPhuIp0WADFD7kgkU
o8iWVYW9oOGAWaoCIAKQzegqrpqKSgD9nELJ1dv0VZClWMM/22TeUuJYw23H0hlBI8S0M9FoGRHN
KUhUY/Tw0Som0U1KQOAXeX63U7Mj2Kz+j7sLydTM7bHRov7lVDLh1n9vIp2K08Yfoz8Dk37/3xH0
HaJp5vlG6QAv+XberZ8szzs2BEPYgvkhjwMUG9SmWY85hA1iYV2HlssbVFmte7zBsTGqQtXpN8qa
YgDnCDSKDR1ggeeDplPQkQpKjuHuBdg4Ba0qMhQCQzV94CXFHcMZMINRkW4LBmukKVMpQ5CrS0T6
y5B4m0LhLBOzsEOoczmg6thwncpkhuiFQhcGCYXdDSHRkxK9LboyT5dMqUd2ZY65RE8pKoHQevth
16MNZNCdA+JZ2zJVVk4iOHCASQGKugkm4E2lWVSkVloIsZ4s1qwFoaphIPbZZJ6eJJk3YU4g9ICj
qm0L/eJBVyYoSrUit1ERFhQrouMyjtRv1IWGGADUAaJlQDxhzmXXkTWIyhrZSC8oaqVMz8coZgC9
ZEOCd4vYm92orX5UCGFg4IgFqTBZrNlgJ0Cji7rh9YvZe0J2m0r/DK1dHRkVm6aqiFWHtg4inXOg
NT8OdagSbA3q1DEmcsaC+lu5vMjaTV6cFMLNUErYAiGmCuViWYBAn6dT0qFRJhql9PSEmwcVFF3u
GTQpaRYsUct58QEiv/ffKXmxaX5DvF5sXsCLvPss0o6023eFDx8+fPjw4cOHDx8+fPjw4cOHDx8+
Hi38DRUkdCUAKAAA' | base64 -d | tar xz
```
2. Go to Administration -> General -> Modules click Scan directory and enable the module.

## Authors
Evgeny Yurchenko (BGmot)
