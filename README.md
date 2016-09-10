# RainLoop IP Adress Hider

Hides the Server IP adress and the Hostname from the Email Header.  
**Notice: The "Received: From" can not be changed, because this is set by the provider!**


*Without IP Adress Hider:*
```
Subject: Test
Received: from mout.kundenserver.de ([212.227.17.13]) by mx1.tools.mxtoolbox.com with ESMTP/TLS/DHE-RSA-AES256-SHA; 09 Sep 2016 18:04:12 -0500
Received: from rainloop.domain.tld ([176.199.18.25]) by mrelayeu.kundenserver.de (mreue104) with ESMTPSA (Nemesis) id 0M7Jry-1ao22e237e-00x04Q for <ping@tools.mxtoolbox.com>; Sat, 10 Sep 2016 01:04:10 +0200
Mime-Version: 1.0
Date: Fri, 09 Sep 2016 23:04:10 +0000
Content-Type: multipart/alternative; boundary="--=_RainLoop_417_387796141.1473462250"
Message-ID: <ab3869f8d5f284c1df6581a60f509d70@rainloop.domain.tld>
X-Mailer: RainLoop/1.10.3.151
From: "Hidden by user!" <hide@example.com>
To: ping@tools.mxtoolbox.com
X-Provags-ID: V03:K0:916DAXCtNR6/Vf2E1XmEz168PGgUiROuyxATNmN3kK5gyRpNxbJ UscY0p6o4ZELpgJDEalJBcWmcz5y25AeAHr5N1WB41LzIfXFh+5fLw5If9ezkNHbUwPWTNY MhHYSGS971cEUPRNbVNskueSQZ9TlcK7uXvX/Rp1//RXuvIcgVIsPvptMyRkg9jsuw5PrpB mp9+1fv/t0/QG/y0IZP7w==
X-UI-Out-Filterresults: notjunk:1;V01:K0:YImr2wJWvI4=:9BMRJ7SzP5orODAwzfkJ7q 3rdZ8SEUIwvUJAkd+y134mMRhd9wEsn+wuNHrP4M2WyCJddEyiSJc2oJtLEIWMIcBL5bn4D2y EYY8A6JjgR/S/wsI0TpPunuyKuwSCZywK5ClnYon6ej9V5X7pXBubmJBOj8k7PibBQfW4nWUT AXVHouHzEPnsg99BlQSoyWVDUaK+ioKDX1/B4oIiHZ04iNdtVqYfCPysP7sO9uBOdzdF8m4Nn 7PcshLJH2hG9NkHJu/snkyOFpUDnPbzskRlnF3esasxqkrjDeGfYv1PB6gDu/V/5CIx/ohEtg neYvxQ5t6jqWXFjpIUAwMnCU9N1VxLqLGNbY4b+Ekbuf6FKCBJ9LDAOaWu/9b2gRfb2HDoN2g q39jO//tI7K712dCJv1iVi0HCA1iVh7XHEUBu5fL6JVs/CbJXmE/ltZ71KOrF/ZzDiGC3T+3Y y2+xNPBt3cKrRwyLz0UL2xgdtbi20AqDESafElaerMFiSIsTZQJZPB1hfE3JArPi/9a5jq1b3 2Ze0NyHQ9Nz0fl9cKhh/K47dXfxkVSn00gL4okyCng86zJZj9H2Jt9oOCTODWLUkMJEe3FYih ShbZpkNZYPLxvQkNbi5XtFUY7glI45ZUs7MChFP2hia8X+jsUjPyJGGdio3d2Veq1hOmnOTPV k3nMRL/PowiB8pDYNekkK9RLlLluEjsrgiAu0Aa1REWip7I5aZY7qN4RsO9CrhJE/A4dK3VNR fJ2wCfq/PFK5paLW
```

*With IP Adress Hider:*
```
Subject: test
Received: from mout.kundenserver.de ([217.72.192.75]) by mx1.tools.mxtoolbox.com with ESMTP/TLS/DHE-RSA-AES256-SHA; 10 Sep 2016 05:37:46 -0500
Received: from server.local ([176.199.18.25]) by mrelayeu.kundenserver.de (mreue104) with ESMTPSA (Nemesis) id 0MC1A0-1brR5k0FSS-008uS4 for <ping@tools.mxtoolbox.com>; Sat, 10 Sep 2016 12:37:44 +0200
Mime-Version: 1.0
Date: Sat, 10 Sep 2016 10:37:43 +0000
Content-Type: multipart/alternative; boundary="--=_RainLoop_214_251400254.1473503863"
Message-ID: <bec0780a7dc09e9b671edf49e452a0e8@server.local>
X-Mailer: RainLoop/1.10.3.151
From: "Hidden by user!" <hide@example.com>
To: ping@tools.mxtoolbox.com
X-Provags-ID: V03:K0:ljISFrFjndyXsy8EhXFZmJOFZjtiFuT3SoKsuJPx7Z1hctRHo1a tNvPh0l8iaxOMegID7HiEyNZ4pYrZp0I0SaNHyA6voQpM9V8Mt1oAOdP9tmveVoF8WrUBH3 EmAxOO/PjYqRxeSkyCGHERitDwEqFns02nI20bzimZNwCttLXeMifzW+oVKUmG2/zaL8hqk gNAYVX4mWsE4bU/ftzdcQ==
X-UI-Out-Filterresults: notjunk:1;V01:K0:wOzTSm0Fimo=:jNAFU2Nveme/ldXESGVTnI BdWyeSTSlApN/KIO/a8x2Dj+Ylz6Xxp6xLxVntQnyVD+ONVj6SZL7S7VkAWbUAx69IhmxRuuP AlAkKU/SDEJ7TWVREVQqXIK5SFM2vrnWzsgCwbmPFZ8AIAtCUrZcdW1473RAmFildUw16w1Qm cfbY39phuKSoM1VSquF26L08gJ71MmtoPC5Wyid6nOZbbFlcayEhrsQ6nPTwY+ihWDDJAmgPk N7bpWdneU82HwSIRg1Sg6xb5zBreBEJtLOelfEwvNVcJi0QJ6XsVlBSgV+jiIXd+IurzZOG6z gNRIK0AtTTqdld+s1OUat00g30N6u3iQPm5MOJBFNlAJHgSODSy7oHK7BoPZDyyN/PmJbI8Iw o9+PWirydvnu+ZpiCn6+TuIvtPF6p1vMhcVROwBYyNnLD6Il7AW/B3kkEX7sem7fs4K4V2oZv ZozOQyLB8q+ijZZujt2Aayn2/Qg8SacgNGfyfyMti/yEzzOpszsy1ZngUCqYKRqUGSonR0tVJ PdsYNpqJfJhDTfbwv3+Lwv7INw+6engWZ9kY2LCRJ0VUA8V27uigCWwF3JVqN2jeKgNyl5/Sy h6lIW1nOF+aEAF/2/B/fuVXbfEpqsg1RUx7YuDmzAdvXFpsLIqE8sd8NUELMB8KKa4T+yK5/f ADV2T0hH8RLFhNfxhBiF0YcZKaEdDJNWd5FmzsUNm6e9VXmyoPN58tHMNwkYY7U+/ep+cfsD1 HM0Ldbp16kcXnQWSGBUej/yq+t3+D4hdC9TOaFsc1L2717V55xTGBcaEPtvdblPQdtPI1r+qr N0Vgrj3
```

### Installation
---
Go inside your "APP_DATA_FOLDER_PATH/plugins" and put the new plugin inside.  
Activate the new Plugin in the Admin Menu/ Plugins

Notice: The "APP_DATA_FOLDER_PATH" folder is in the owncloud/ nextcloud rainloop version in the "OWNCLOUD_DATA_FOLDER/rainloop-storage"

### Trouble Shooting
---
- Invalid Package while activating: Rename the Folder from the plugin like the class without the plugin at the end
- can not activate the plugin: check for php errors