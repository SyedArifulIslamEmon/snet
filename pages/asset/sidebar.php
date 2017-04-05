<header id='header'>
	  <h1 class='logo' data-title='FJ'></h1>
		<div align="center" id="tnl" style="margin-top: 15px;">
			<a href="<?php echo BU.US.'user'; ?>"><h1 class="bev" id="title" style="font-size: 29px;width: 285px;position: relative;left: -22px;"><img style="height: 27px;" src="<?php echo imgPath(); ?>frndjungle.png" />FRIENDS JUNGLE</h1></a>
		</div>
</header>
<ul id="top" class='links'>
    <li id="home" class='link active'>Home</li>
    <li id="street" class='link'>Street</li>
    <li id="search" class='link'>Search</li>
</ul>
<div id="searchbox"><input name="search" id="sea" class="logm" type="text" placeholder="Search Jungle" /><div id="seasub" class="icon-sea"></div></div>
<aside id='sidebar'>
  <button class='trigger icon-tog'></button>
  <ol class='links'>
    <li class='link icon-use' id="name" data-title='<?php echo $jfrnd; ?>'></li>
    <li class='link icon-mai' id="msg" data-title='Messages'></li>
    <li class='link icon-set' id="sett" data-title='Settings'></li>
    <li class='link icon-hel' id="about" data-title='About'><a href="about?id=<?php echo $_SESSION['juser']; ?>"></a></li>
    <li class='link icon-off' id="logout" data-title='Logout'></li>
  </ol>
</aside>
<main id='container'>