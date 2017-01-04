<?php
class Article extends Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;

    /**
     * 未添加前 extends Illuminate\Database\Eloquent\Model 的代码
     * @return [type] [description]
     */
    /*public static function first(){
        $connection = mysql_connect("localhost","root","353167");
        if (!$connection) {
          die('Could not connect: ' . mysql_error());
        }

        mysql_set_charset("UTF8", $connection); 
        mysql_select_db("tinylara", $connection); 
        $result = mysql_query("SELECT * FROM articles limit 0,1");

        if ($row = mysql_fetch_array($result)) {
            return $row;
        } 
        mysql_close($connection);
    }*/
}