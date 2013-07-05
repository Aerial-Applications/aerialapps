	<!-- ADD ERRORS FOR THESE -->
	
	
	<?php
	
		// GET AND ASIGN THE pagename
		if(isset($_GET['pagename']))
		{
			$pagename = $_GET['pagename'];
		} else {
			$pagename = "about/products/all";
		}
		
		// FORCE THE pagename to about/products/all 
	//	$pagename = "about/products/all";
		
		// QUERY THE DATABASE
		$layoutquery = mysql_query("SELECT * FROM $productstable WHERE pagename = '$pagename'");
		
		// FETCH THE RESULTS THEN CONVERT THEM INTO AN ARRAY
		
		// WHILE THIS IS HAPPENING...
		WHILE($rows = mysql_fetch_array($layoutquery)):
		
			// DO THIS.
			$id = $rows['id'];
			$pagename = $rows['pagename'];
			$title = $rows['title'];
			$copy = $rows['copy'];
			
			// echo "$copy";
			eval('?>' . $title . '<?php ');
			eval('?>' . '<br /><br />' . '<?php ');
			eval('?>' . $copy . '<?php ');
			eval('?>' . '<br /><br /><br />' . '<?php ');
			
		endwhile;
		
	?>