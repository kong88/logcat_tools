<?php
$file = $argv[1];
echo $file . "\n";
if (empty($file)) {
	exit("no file supply!");
}


if (file_exists($file)) {
	$new_file = "new_$file";
	$fp = fopen($file, "r");
	$i = 0;
	while(!feof($fp)) {
		$str = fgets($fp);
		$arr = preg_split('/\s+/', $str);
		if (!empty($arr[4]) && $arr[4] == "E") {
			file_put_contents($new_file, $str, FILE_APPEND);
		}
		$i++;
		
	}
	echo "total line : $i";
}

exit;
