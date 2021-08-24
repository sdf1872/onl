
<h1><center>
  zlog</center>
</h1>
<p>proxy this page: curl [this link] > index.html</p>
<?php
//START SLIMDOWN
class Slimdown {
    public static $rules = array (
        '/(#+)(.*)/' => 'self::header',                           // headers
        '/\[([^\[]+)\]\(([^\)]+)\)/' => '<a href=\'\2\'>\1</a>',  // links
        '/(\*\*|__)(.*?)\1/' => '<strong>\2</strong>',            // bold
        '/(\*|_)(.*?)\1/' => '<em>\2</em>',                       // emphasis
        '/\~\~(.*?)\~\~/' => '<del>\1</del>',                     // del
        '/\:\"(.*?)\"\:/' => '<q>\1</q>',                         // quote
        '/`(.*?)`/' => '<code>\1</code>',                         // inline code
        '/\n\*(.*)/' => 'self::ul_list',                          // ul lists
        '/\n[0-9]+\.(.*)/' => 'self::ol_list',                    // ol lists
        '/\n(&gt;|\>)(.*)/' => 'self::blockquote ',               // blockquotes
        '/\n-{5,}/' => "\n<hr />",                                // horizontal rule
        '/\n([^\n]+)\n/' => 'self::para',                         // add paragraphs
        '/<\/ul>\s?<ul>/' => '',                                  // fix extra ul
        '/<\/ol>\s?<ol>/' => '',                                  // fix extra ol
        '/<\/blockquote><blockquote>/' => "\n"                    // fix extra blockquote
    );

    private static function para ($regs) {
        $line = $regs[1];
        $trimmed = trim ($line);
        if (preg_match ('/^<\/?(ul|ol|li|h|p|bl)/', $trimmed)) {
            return "\n" . $line . "\n";
        }
        return sprintf ("\n<p>%s</p>\n", $trimmed);
    }

    private static function ul_list ($regs) {
        $item = $regs[1];
        return sprintf ("\n<ul>\n\t<li>%s</li>\n</ul>", trim ($item));
    }

    private static function ol_list ($regs) {
        $item = $regs[1];
        return sprintf ("\n<ol>\n\t<li>%s</li>\n</ol>", trim ($item));
    }

    private static function blockquote ($regs) {
        $item = $regs[2];
        return sprintf ("\n<blockquote>%s</blockquote>", trim ($item));
    }

    private static function header ($regs) {
        list ($tmp, $chars, $header) = $regs;
        $level = strlen ($chars);
        return sprintf ('<h%d>%s</h%d>', $level, trim ($header), $level);
    }

    /**
     * Add a rule.
     */
    public static function add_rule ($regex, $replacement) {
        self::$rules[$regex] = $replacement;
    }

    /**
     * Render some Markdown into HTML.
     */
    public static function render ($text) {
        $text = "\n" . $text . "\n";
        foreach (self::$rules as $regex => $replacement) {
            if (is_callable ( $replacement)) {
                $text = preg_replace_callback ($regex, $replacement, $text);
            } else {
                $text = preg_replace ($regex, $replacement, $text);
            }
        }
        return trim ($text);
    }
}

//END SLIMDOWN
$mds=scandir("mdfiles/sdf/",1);
foreach ($mds as &$md) {
  echo "<a href='#".$md."'>".$md."</a><br/>";
}
foreach ($mds as &$md) { 
  $date=date("Y-m-d h:i:sa", filemtime("mdfiles/".$md));
  $cont=file_get_contents("mdfiles/sdf/".$md,1);
  $name=$md;
  $string="
  <style>
  * {
    font-family: 'Consolas', 'Helvetica';
    letter-spacing:5px;
  }
  body {
    background-color:whitesmoke;
  }
  hr {
    float: left;
    width: 99%;
  }
  #content {
    letter-spacing: 5px;
    padding-left:20%;
  }
  </style>
  <div id='%name%'>
    <h3>
      <center>
        %name%<br/>
      </center>
    </h3>
    <sub>
      <center>
        %date%
      </center>
    <sub>
    <br/>
    <div id='content'>
    %cont%
    </div><!--span:-->
  </div><br/><hr/>";
  $string=str_replace("%cont%",$cont,$string);
  $string=str_replace("%date%",$date,$string);
  $string=str_replace("%name%",Slimdown::render($name),$string);
  echo $string;
}