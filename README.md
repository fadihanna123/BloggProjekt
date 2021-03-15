## 1. Blogging

## 1.1 Bloggprojekt

Detta är ett bloggprojekt som underlättar att administrera blogginlägg. <br>
**Webbplatsen har 10 funktioner:** <br>
1 - Se de senaste 5 inlägg. <br>
2 - Se de registrerade användare. <br>
3 - Kunna söka efter inlägg. <br>
4 - Kunna skapa och administrera blogginlägg.<br>
**I utloggadläge kan man:**<br>
1 - Se startsidan <br>
2 - Registrera sig i intränatapplikationen. <br>
3 - Logga in i intränatapplikationen. <br>
4 - Se de senaste 5 inlägg. <br>
5 - Se de registrerade användare. <br>
6 - Söka efter inlägg. <br>
Webbapplikationen är responsivt.<br>
**Den här webbapplikationen består av dessa länkar:** <br>
1 - Startsida<br>
2 - Logga in <br>
3 - Registrera sig. <br>
4 - Skapa inlägg. <br>
5 - Administrera inlägg. <br>
6 - Logga ut. <br>

## 1.2 Mappstruktur <br>

css/ <br />
css/main.css <br />
css/mobile.css <br />
js/ <br />
js/loadAll.js <br />
TS/ <br />
TS/loadAll.ts <br />
Images/ <br />
Images/Logo.jpg <br />
includes/ <br />
includes/classes/ <br />
includes/classes/posts.class.php <br />
includes/pages/admin.php <br />
includes/pages/create.php <br />
includes/pages/edit.php <br />
includes/pages/login.php <br />
includes/pages/logout.php <br />
includes/pages/register.php <br />
includes/pages/showposts.php <br />
includes/requests/add.php <br />
includes/requests/delete.php <br />
includes/requests/edit.php <br />
includes/requests/login.php <br />
includes/requests/register.php <br />
includes/requests/search.php <br />
includes/requests/showposts.php <br />
Includes/config.php <br />
Includes/loader.php <br />
blogg.sql <br />
index.php <br />
package.json <br />
README.md <br />
Screenshot.PNG <br />
tsconfig.json <br />
yarn.lock <br />

## 1.3 Installation <br>

Du kan ladda ner alla dessa filer och installera källkodsfiler i din lokala server eller egen hemsida. <br>
Du behöver ändra SQL uppgifter från din localhost till din egen i dessa filer:<br>
includes/config.php rad 12, 13, 14 och 15.<br>
Du kan använda blogg.sql filen för att kunna skapa tabeller.<br>
Manuellt:<br>
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
`fullnamn` text NOT NULL,<br>
`username` text NOT NULL,<br>
`password` text NOT NULL,<br>
`email` text NOT NULL,<br>
`date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP<br>

## 1.4 Programmeringsspråk som används i projektet: <br>

HTML, CSS, Objektorienterad PHP, Typescript och Javascript. <br>

## 1.5 Skärmdump av webbplatsen <br>

![alt text](https://github.com/fadihanna123/BloggProjekt/blob/master/Screenshot.PNG "Screenshot av hemsidan")
