
<!DOCTYPE html>
<?php
  $myfile = fopen("t.txt", "r") or die("Unable to open file!");
  $value = fread($myfile,filesize("t.txt"));
  fclose($myfile);
  $value = $value + 1;
  if($_GET['reset'] == 1){
    $value = 0;
  }
  $myfile = fopen("t.txt", "w") or die("Unable to open file!");
  fwrite($myfile, $value);
  $ip = $_SERVER['REMOTE_ADDR'];
  $myfile2 = fopen("i.txt", "r") or die("Unable to open file!");
  $value2 = fread($myfile2,filesize("i.txt"));
  fclose($myfile2);
  $value2 = "$value2<br>$ip";
  $myfile2 = fopen("i.txt", "w") or die("Unable to open file!");
  fwrite($myfile2, $value2);
  
  
?>
<head>
  <meta charset="utf-8"><link rel="shortcut icon" href="logo1.png"/>
  <title>Ronald Erquiza - Ron Erquiza</title>
  <link rel = "stylesheet" type = "text/css"
   href = "Home.css" />
   <script src="jquery-3.2.1.min.js"></script>
   <script src="typed.js"></script>
   <script>
      document.addEventListener('DOMContentLoaded', function(){
        Typed.new('#typing-text', {
          stringsElement: document.getElementById('typed-strings'),
          typeSpeed: 0,
          shuffle: true,
          backSpeed: 0, 
          backDelay: 2000,
          loop: true,
        });
      });
   </script>
   
   <script type="application/ld+json">
        {
          "@context": "ronerquiza.co.nf",
          "@type": "Personal",
          "url": "http://ronerquiza.co.nf",
          "name": "Ron Erquiza",
          "author": "Ron Erquiza",
          "image": "http://ronerquiza.co.nf/logo.png",
          "description": "This is the personal website of Ronald Erquiza."
          
        }
</script>
</head>


<body>
<h1>
  <a href = "home.php"><img src="logo.png" name="ron erquiza"></a>
</h1>
<h2>
  <p id="typing-text"></p>  
</h2>

</body>
</html>

<div id="typed-strings">

  <p>$ Hi Visitor!</p>

  <p>$ Welcome to my website :)</p>

  <p>$ My name is <strong>Ronald K. Erquiza</strong></p>

  <p>$ I am a programmer... B)</p>

  <p>$ Email me at <a href="ronalderquiza@gmail.com" style="color: #0099cc;"> ronalderquiza@gmail.com</a></p>

  <p>$ Follow me on Facebook:<br><a href="https://www.facebook.com/ronerquiza" style="color: #0099cc;">facebook.com/ronerquiza</a></p>

  <p>$ Know more about me on my LinkedIn account: <a href="https://www.linkedin.com/in/ronald-erquiza-61691811b" style="color: #0099cc;">Ronald Erquiza</a> </p>

  <p>$ <?php
  
      $time = date('H') + 8;
      if($time < 5){
        echo "Good morning! It's too early :P";
      }
      else if($time < 12){
        echo "Good morning! Have a nice day ;)";
      }
      else if($time < 18){
        echo "Good afternoon! :D";
      }
      else{
        echo "Good evening! How's your day? :)";
      }
  ?></p>

  <p>$ 
  <?php
    $currtime = date('H:i', strtotime(date('H:i').'+8 hour'));
    echo "It's already $currtime!";
  ?></p>

  <p>$ 
  <?php
    $months = ['January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December'];
    $currmonth = date('M');
    $currdate = date('d');
    $currYear = date('Y');
    echo "Today is $currmonth $currdate, $currYear.";
  ?></p>

  <p>$ This website is under development</p>

  <p>$ Let's talk about Computer Science!</p>

  <p>$ How to code in Java? Easy.<br>
  <br>
  <code><keyword>class</keyword> <type>Sample</type>{<br>
  <span id=sentences><keyword>public static <type>void</type></keyword> main(<type>String</type>[] args){<br>
  <span id=sentences><span id=sentences><type>System</type>.out.println(<string>"Hello programmer's life!"</string>);<br></span></span>
  <span id=sentences><span id=sentences><comment>//write some code here</comment><br></span></span>
  <span id=sentences>}<br></span>
  </span>
  }
  </code></p>

  <p>$ How to code in C/C++? Easy.<br>
  <br>
  <code><hc>#include&ltstdio.h&gt</hc><br>
  <br>
  <type>int</type> main(){<br>
  <span id=sentences>printf(<string>"Hello programmer's life!"</string>);<br></span>
  <span id=sentences><comment>//write some code here</comment><br></span>
  <span id=sentences><keyword>return</keyword> 0;<br></span>
  }
  </code></p>

  <p>$ How to code in Python? Easy.<br>
  <br>
  <code>print(<string>"Hello programmer's life"</string>);</code></p>

</div>
<span id="typed"></span>