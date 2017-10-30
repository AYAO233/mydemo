<html>

    <head>
        <<meta http-equiv="content-type" content='text/html; charset=utf-8'>
        <title>第一个PHP程序（获取服务器信息）</title>
        <!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
    </head>

    <body>
<?php
    $sysos = $_SERVER["SERVER_SOFTWARE"];       //获取服务器表示的字串
    $sysversion = PHP_VERSION;      //获取PHP服务器版本
    
    //以下两条代码链接MySQL数据库并获取MySQL数据库版本信息
    $linkmysql = mysqli_connect("localhost", "root", "");
    $mysqlinfo = mysqli_get_server_info($linkmysql);

    //从服务器中获取GD库的信息
    if (function_exists("gd_info")) {
        $gd = gd_info();
        $gdinfo = $gd['GD Version'];
    } else {
        $gdinfo = "未知";
    }

    //从GD库中查看是否支持FreeType字体
    $freetype = $gd["FreeType Support"] ? "支持" : "不支持";

    //从PHP配置文件中获得是否可以远程文件获取
    $allowurl = ini_get("allow_url_fopen") ? "支持" : "不支持";

    //从PHP配置文件中获得最大上传限制
    $max_upload = ini_get("file_upload") ? ini_get("upload_max_filesize") : "Disabled";

    //从PHP配置文件中获得脚本的最大执行时间
    $max_ex_time = ini_get("max_execution_time")."秒";

    //以下两条获取服务器时间，中国大陆采用的是东八区的时间，设置失去携程Ttc/GMT-8
    date_default_timezone_set("Etc/GMT-8");
    $systemtime = date("Y-m-d H:i:s",time());

    /* ********************************************************** */
    /* 以HTML表格的形式将以上获取到的服务器信息输出给客户段浏览器 */
    /* ********************************************************** */
    echo "<table align = center cellspaceing = 0 cellpadding = 0 >";
    echo "<caption> <h2> 系统信息 </h2> </caption>";
    echo "<tr> <td> Web服务器:    </td> <td> $sysos       </td> </tr>";
    echo "<tr> <td> PHP版本:      </td> <td> $sysversion  </td> </tr>";
    echo "<tr> <td> MySQL版本:    </td> <td> $mysqlinfo   </td> </tr>";
    echo "<tr> <td> GD库版本:     </td> <td> $gdinfo      </td> </tr>";
    echo "<tr> <td> FreeType:     </td> <td> $freetype    </td> </tr>";
    echo "<tr> <td> 远程文件获取: </td> <td> $allowurl    </td> </tr>";
    echo "<tr> <td> 最大上传限制: </td> <td> $max_upload  </td> </tr>";
    echo "<tr> <td> 最大执行时间: </td> <td> $max_ex_time </td> </tr>";
    echo "<tr> <td> 服务器时间：  </td> <td> $systemtime  </td> </tr>";
    echo "</table>";
?>
    </body>

</html>