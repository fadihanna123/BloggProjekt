## 1. Blogging 
## 1.1 Bloggprojekt
Detta är ett bloggprojekt som hjälper personal att kommunicera med sina chefer genom att till exempel anmäla sjukanmälan eller ansöka om ledighet. <br>
**Webbplatsen har 8 funktioner:** <br>
1 - Se de senaste nyheter. <br>
2 - Administrera nyheter, att kunna lägga till/ändra/radera nyheter(för administratörer). <br>
3 - Ladda upp filer(för administratörer) och kunna se dessa filer i en tabell. <br>
4 - Se personalmedlemmar. <br>
5 - Anmäla sjukanmälan och söka om ledighet. <br>
6 - FAQ(frågor och svar) sidan och kunna lägga till frågor(för administratörer).<br>
7 - Ändra medlemsuppgifter, ändra e-post och lösenordet. <br>
8 - Adminpanel där kan man administrera företagets uppgifter, lägga till kategorier och möjlighet att kunna godkänna medlemmar. <br>
**I utloggadläge kan man:**<br>
1 - Se startsidan <br>
2 - Registrera sig i intränatapplikationen. <br>
3 - Logga in i intränatapplikationen. <br>
4 - Återställa lösenordet. <br>
Webbapplikationen är responsivt.<br>
**Den här webbapplikationen består av dessa länkar:**  <br>
1 - Startsida<br>
2 - Logga in <br>
3 - Återställa lösenordet. <br>
4 - Registrera sig. <br>
5 - Hem. <br>
6 - Nyheter. <br>
7 - Filarkiv. <br>
8 - Personal. <br>
9 - Anmälan. <br>
10 - FAQ.<br>
11 - Mitt konto. <br>
12 - Adminpanel. <br>
## 1.2 Mappstruktur <br>
css/<br>
css/main.css<br>
css/mobile.css<br>
css/normalize.css<br>
Images/<br>
Images/Logo.jpg<br>
includes/<br>
includes/classes/<br>
includes/classes/posts.class.php<br>
includes/pages/admin.php<br>
includes/pages/create.php<br>
includes/pages/edit.php<br>
includes/pages/login.php<br>
includes/pages/logout.php<br>
includes/pages/register.php<br>
includes/pages/showposts.php<br>
includes/requests/add.php<br>
includes/requests/delete.php<br>
includes/requests/edit.php<br>
includes/requests/login.php<br>
includes/requests/register.php<br>
includes/requests/search.php<br>
includes/requests/showposts.php<br>
Includes/config.php<br>
Includes/loader.php<br>
js/jquery-3.3.1.js<br>
blogg.sql
index.php
## 1.3 Installation <br>
Du kan ladda ner alla dessa filer och installera källkodsfiler i din lokala server eller egen hemsida. <br>
Du behöver ändra SQL uppgifter från din localhost till din egen i dessa filer:<br>
includes/config.php rad 12, 13, 14 och 15.<br>
Du kan använda blogg.sql filen för att kunna skapa tabeller.<br>
Manuellt:
Du behöver skapa dessa tabeller:<br>
posts för att administrera blogginlägg.<br>
users för att administrera de registrerade användare.<br>
Du behöver skapa dessa kolumner i dessa tabeller :<br>
**posts**:<br>
`id` int(11) NOT NULL,<br>
`titel` text NOT NULL,<br>
`post` text NOT NULL,<br>
`author` text NOT NULL,<br>
`date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,<br>
`usrid` int(11) NOT NULL<br>
**users**:<br>
`id` int(11) NOT NULL,<br>
`fullnamn` text NOT NULL,<br><br>
`username` text NOT NULL,<br>
`password` text NOT NULL,<br>
`email` text NOT NULL,<br>
`date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP<br>
## 1.4 Programmeringsspråk som används i projektet: <br>
HTML, CSS, Objektorienterad PHP och Javascript. <br>
## 1.5 Skärmdump av webbplatsen <br>
![alt text](https://github.com/fadihanna123/Intranat/blob/master/screenshot.png "Screenshot av hemsidan")

