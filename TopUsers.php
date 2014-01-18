<?php
$url = 'https://mcseeds.mobi/seedscript_500.php';
$data = array('get_top_users' => "01W=");
$options = array(
    'http' => array(
        'header'  => "Content-Type: application/x-www-form-urlencoded\r\n User-Agent: MinecraftSeedsPro/5.0.0 CFNetwork/672.0.8 Darwin/14.0.0",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$result = json_decode($result, true);
?>

<html>

<head>

  <meta charset="UTF-8">

  <title>Most Followed</title>

  <style>@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  background-color: #3e94ec;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 700px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}

/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 700px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}

th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}

th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}

tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}

tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
  border-bottom: 1px solid #22262e;
}

tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}

tr:nth-child(odd) td {
  background:#EBEBEB;
}

tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}

tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}

td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
.small{
width: 80px;
text-align: center;
}
</style>

  <script>
    window.open    = function(){};
    window.print   = function(){};
    if (false) {
      window.ontouchstart = function(){};
    }
  </script>

</head>

<body>

  <html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Most Followed</title>
  <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>
<div class="table-title">
<h3>Most Followed Users</h3>
</div>
<table class="table-fill">
<thead>
<tr>
</tr>
</thead>
<tbody class="table-hover">
<?php
foreach ($result as $value) {

echo('<tr>
<td class="text-left small">
<svg width="80" height="80">');
  $x = 0;
  $y = 0;
foreach (explode("#", $value["avatar"]) as $key2 => $value2) {
echo('<rect x="' . $x . '" y="' . $y . '" width="10" height="10"
  style="fill:' . $value2 . ';" />');
	if ($x === 70) {
		$y = $y + 10;
		$x = 0;
	}
	else {
		$x = $x + 10;
	}
}
echo("</svg></td>");

 
	echo('<td class="text-left"><b>' . $value['nickname'] . ' <br/>' . $value[0] . ' Followers </td>');
	echo("</tr>");
}
?>
</tbody>
</table>
<br/> <br/> 
  </body>

  <script>

</script>

</body>

</html>