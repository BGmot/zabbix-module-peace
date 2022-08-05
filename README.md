# zabbix-module-peace
Written according to Zabbix official documentation <https://www.zabbix.com/documentation/current/manual/modules>

A Zabbix module to replaces 'Z' in favicon and in main menu when it is in compact mode.

The look without the module:

![screenshot](screenshots/screenshot-before.png)

The look with the module installed and activated:

![screenshot](screenshots/screenshot-after.png)

# How to use
1.a. Create a folder in your Zabbix server modules folder (by default /usr/share/zabbix/modules) and copy contents of this repository into that folder.

*** OR ***

1.b. As root execute following command from your Zabbix server modules folder (by default /usr/share/zabbix/modules:
```
echo 'H4sIAAAAAAAAA+1YX2gcRRjfxJz1tgaFaogiOFmke4fdu9vL3a1cemnSpDbRtsS2LynRZG9v7nZ7
e7Przmz+NAZi8aUgPvoQIhSkKiKCkAcFH/ShFEQk70L1qSBSfGitPrTizO7dJdo0V/FIKs7vmJ2Z
b775vm/m29/M3Z3Ti0VrXqk5Jd+Gigt1AyZ1jCHBSaFdSFFo2WxQU/y9DtpqJq2lNTXb30/laian
aQLIti2CbeBjonsACJ7jkO30Wo3/R3Hu3vkv67OW4aBpv5yg9b/wwRKcy2Tumf9Mqr+R/1xOZfnX
sqoqgFTbVrkN/uf5F4QO+hkaepw+u4TrtN9Dy4WJE0e7xadF2uweHxs9SeshVh55mD4/tl6/Squ1
8dHh0/Or17//rLvzlUe/Wn+DFH5OPbXv6jPfDu8xvpRudb375KUL3mu/LOZurHeudJodxzvWlstL
y9Vrt9feKt3pemJorylejGQiG6MfCGeGTgnKxfhyz/rm4Wr518mZ7367MfXqzJ2uT37ouI8p9eFr
N1/4YnXD9yH1cvSl5OXcFFv4+JETo58enjm/Wxv/QGAb/vtVT7eQpSOlbOsVJZ2ZT2cSLqr8Yx+t
+E/p3uS/qqlCKq2mclnO/53AFkzvZSVg+o9zhd9pFXXHJrEg7N3HSoewsso0koz+Y1eMmd7IQ929
yjfv/PHhpcixtVtffxR5v2ei79nbn1/RVh57Uen9qeft82/uEVLPR8jL3e/dZE458x4YbMX/mo6s
MsQkcRY7qA0+Wt7//Y37P5XVMhq9/3Mqv/93BotiVGrke3oWethykJQH6gEqt0q0JQXvhMT6SK9B
JjlFHBfM6V5fINV9Yjoekx+ZrUC0ACZ9zzAhqjrBcAliw7NcEtqVTkLXpvYwkM/IwEKg/iUT6KjE
ujWdPSDywRw1ASwCLMzkhlNzdYMA+p7CRGB3I1ZJTaSa8WGXRUuFE82wfc9mApMQF+eTyYpFTL+Y
oBaTh4/WHJLcggKSuCSKu52aHcFW/D8edBKu6bbHRwv+U+qrjftf03L0/qc/AzP9nP87gYOHaJpF
sUkdECYfTwX8GRBFH0Mw4nhwaiQcAToG9eZAODjiIOI5tg29YGzYYFwPx4YnJqgJw6bfKOuGAZwn
EJWaNgA9gFy/aFsGKPsomAocdBp6NQvpBMbq5sBzelDH82DWsUpsVrQumnb1CgSFhoYyWIEknBSL
DzA1z/EJja0ADNtBQUz5/Ag9T2gHkVg8mBCTQy05nGLrC7TLjIbiQOdYIAyNWmUQ2+w/HkR0lxj0
FYB8Fnuuwdgkg/37mRagaLhgCmEzMWeVqJcWSuxKluveotAwHSAfxGSBbiRZcGFBInR/kwbG0qB8
INCJyok6x7FVgkXdU2yn4iiNA3WxqQYADYCYeZDOuPMDm8QmtComuVte1I1qhe4PKuUBPWNjUniI
4K0O1Fa/KaQ4QI7iQapMluo+2A7Q1SWD5Q3KA5uXbFuoCjxoFyR2e0jA9GC5cD8B/PVPDaludkkM
yhI99nebkBwcHBwcHBwcHBwcHBwcHBwcHBwcbcKffpn6FQAoAAA=' | base64 -d | tar xz
```
2. Go to Administration -> General -> Modules click Scan directory and enable the module.

## Authors
Evgeny Yurchenko (BGmot)
