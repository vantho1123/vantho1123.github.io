<?php
class page{
    function findpage($count,$limit){
        $page=(($count%$limit)==0)?$count/$limit:floor($count/$limit)+1;
            return $page;
        
    }
    function findstart($limit){
        if(!isset($_GET['page'])||$_GET['page']==1){
            $start=0;
        }
        else{
            $start=($_GET['page']-1)*$limit;
        }
        return $start;
    }
}
?>