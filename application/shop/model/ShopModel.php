<?php
namespace app\mall\model;

use think\Model;
class ShopModel extends Model
{
    public $table = "xx_goods";
    /**
     * [getShopByID 获取单个商品]
     * @return [type] [description]
     * @author
     */
    public function getShopByID($id){
        return $this->cache(true,10)->where("goodsId",$id)->find();
    }
    /**
     * [getShopByID 获取单个商品]
     * @return [type] [description]
     * @author
     */
    public function getGoodsByCatID($id,$page,$num=30){
        
        return $this->cache(true,10)->where("goodsCatId",$id)->page($page,$num)->select();
    }
}

?>