yt tutorial add app ez ( you dont need to learn PHP  ) https://www.youtube.com/watch?v=nfuJcD9JDQ8 

only very basic php (add('app name here etc'))

# versions

/index2.php is v0.2
/index3.php is v0.3 etc
/index6.php is the one public sees
/index7.php is the one we develop on
# News!
If your too lazy to add your app and want me to add ur app for u then i can do it!

app requests:
Pls add my app it is at /sample app.html 
# Contributing urself (in the video)
index7.php, line  236:
add
```
add("YOUR_APP_LINK","YOUR_APP_NAME","YOUR_APP_ID","YOUR_APP_ID","CHTML");
                                                             // ^^ should be empty
```
YOUR_APP_LINK: Required; Link to your app e.g. /notepad.html

YOUR_APP_NAME: Required; App name.

YOUR_APP_ID: Required; App ID.

CHTML: Required; Extra HTML. Leave blank ("") (but don't not enter a value). Like `addHTML('a','b','c','d','');`

       Or, if you do not want to use external page like notepad.html,

      Use it as generateCHTML("YOURHTML")

## Updating the apps I added: 
- Ask me (right here in this MD file) for permission to YOUR_APP_LINK (a repl).
- I will give you edit acess to the project.
- You can update it !!!

## New experimental feature

```
function addHtml($appname,$appid,$chtml) {
  add("NOLINK",$appname,$appid,$appid,generateCHTML($chtml));
}
```

addHtml("MyApp","app01","<h1>hi</h1>");

## Credits

after 1 wekk i weill insert credits because this project was kinda just made soo

                                                           ^ as in not that much ppl have joined