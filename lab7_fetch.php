<html>
	<head>
		<title></title>
	</head>
	<body>

		<?php 
			session_start();
			echo" DATABASE for all shop";
			include("local_config.php");
			# Connect to DATABASE
			$pg_conn = pg_connect($conn_string);
			# Get data by query
			$table = "product";
			$result = pg_query($pg_conn, "select * from ".$table.";");
			#var_dump(pg_fetch_all($result));
			$numrows = pg_num_rows($result)
		?>
		<?php
			include("db_display.php");
			display_table($result);
			pg_close();
		?>
		
	</body>

</html>
