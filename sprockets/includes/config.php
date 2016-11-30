<?php 
//config.php 

//this enables pages to know their own names
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
define('DEBUG',TRUE); #we want to see all errors

//this clears date errors of all sorts
date_default_timezone_set('America/Los_Angeles');

//this is inside of an H1 in the header.php file
$banner = 'Banner Goes Here';

    $nav1['index.php'] = 'Main Page';
    $nav1['template.php'] = 'Template Page';
    $nav1['contact.php'] = 'Contact Page';
    $nav1['customers.php'] = 'Customers';


switch(THIS_PAGE)
{
    case 'index.php':
        $title='Main Page';
        $banner='Main Page';
    break;
    case 'template.php':
        $title='Template Page';
        $banner='Template Page';
    break;
    case 'contact.php':
        $title='Contact Page';
        $banner='Contact Page';
    break;    
    
    default :    
        $title = THIS_PAGE;
        
}

//stores database login info
include 'credentials.php';

function makeLinks($nav)
{
    $myReturn = "";
    
    foreach($nav as $url => $text){
        
        if(THIS_PAGE == $url)
        {
             $myReturn .='<li class="current"><a href="' . $url . '">' . $text . '</a></li>';
    
        }else{
            $myReturn .='<li><a href="' . $url . '">' . $text . '</a></li>';

        }
        
    }
    return $myReturn;
    
    
}

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}


date_default_timezone_set('America/Los_Angeles');
//echo date ('l');
$dayOfWeek = date ('l');

if(isset($_GET['day']))
{
    $dayOfWeek=$_GET['day'];
 
}else{ //show today!
     $dayOfWeek= date ('l');
}

switch($dayOfWeek)
{
    case 'Mon':
        $coffee= 'Mocha';
        $pic= 'white_chocolate_mocha.jpg';
        $sentence= "will totally keep your insides warm, too. It’s rich, creamy, sweet {but not overly}, and perfect for enjoying on a chilly fall morning, or evening for that matter";
        $color = "#FFC300";
        $content= "Our signature espresso meets white chocolate sauce and steamed milk, then is finished off with sweetened whipped cream in this white chocolate delight.";
        break;    
    case 'Tue';
        $coffee= 'Macchiato';
        $pic= 'macchiato.jpg';
        $sentence= " the new espresso classic has espresso shots slowly poured over lightly aerated milk for a bold and roasty new way to sip.";
        $color = "#C70039";
        $content= " a layered beverage crafted with care. Two shots of espresso are poured over a swirl of flavor combined with milk and topped off with a layer of foam.";
        break;
    case 'Wed';
        $coffee= 'Cappuccino';
        $pic= 'cappuccino.jpg';
        $sentence= "Dark, rich espresso lies in wait under a smoothed and stretched layer of thick foam. It's truly the height of our baristas' craft.";
        $color = "#900C3F";
        $content= "made from freshly ground and brewed espresso combined with steamed milk. We add some milk foam on top and get you on your way.";
        break;
    case 'Thu';
        $coffee= 'Espresso';
        $pic= 'espresso.jpg';
        $sentence= "Our smooth signature Espresso Roast with rich flavor and caramelly sweetness is at the very heart of everything we do.";
        $color = "#873600";
        $content= "is selected from the finest high quality Arabica beans. Freshly ground and brewed to order, you will enjoy every sip of the rich taste and robust flavor.";
        break;       
    case 'Friday';
        $coffee= 'French Vanilla Latte';
        $pic= 'french_vanilla_latte.jpg';
        $sentence= " a shot of espresso in steamed milk lightly topped with foam";
        $color = "#FAE5D3";
        $content= "features a new French Vanilla syrup that replaces the plain vanilla syrup. The French Vanilla syrup is accompanied by fresh brewed espresso and foamed steamed milk.";
        break;
    case 'Saturday';
        $coffee= 'Cold Brew';
        $pic= 'cold_brew.jpg';
        $sentence= "because it's made with colder water, it's generally a bit mellower and tastes more rounded out";
        $color = "#1E8449";
        $content= " made with cold water and coarsely ground beans from Latin America and Africa. They claim that their cold brew process produces a cold brew coffee that is smooth, sweet, with hints of citrus and chocolate.";
        break;
    case 'Sunday';
        $coffee= 'Pumpkin Spice Latte';
        $pic= 'pumpkin-spice-latte.jpg';
        $sentence= "Our Pumpkin Spice Latte tastes great on a Fall Day";
        $color = "#FF7518;";
        $content= "Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical.";
        break;    
}



?>