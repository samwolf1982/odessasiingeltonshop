<?php
namespace app\components;
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 22.02.2018
 * Time: 19:10
 */

use common\models\Leftmenu;
use dvizh\shop\models\Category;
use dvizh\shop\models\Product;
use yii\base\Widget;
use yii\helpers\Html;
use Yii;
use yii\helpers\Url;

class CategoryleftmenuWidget extends Widget
{
    public $name='';   // название виджета
    public function init()
    {
        parent::init();

    }

    public function run()
    {
//        [['id', 'parent_id'], 'integer'],
//            [['text', 'name'], 'safe'],
            $categories = Leftmenu::find()->where(1)->orderBy(['sort'=>SORT_ASC])->all();
        foreach ($categories as &$ct) {
                  $cat_prod= Category::find()->where(['id'=>$ct->category_id])->one();
                  if ($cat_prod){
                          if (empty($ct->text)){$ct->text=$cat_prod->name;}
                          if (empty($ct->url)){$ct->url=Url::to(['/category/view', 'categoryId' => $cat_prod->id]);}

                  }
        }

            unset($ct);
        $name=$this->name;
        return $this->render('categoryleftmenu',compact('categories','name'));
    }
}