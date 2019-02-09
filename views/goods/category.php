<?php
/**
 * Created by PhpStorm.
 * User: meyson
 * Date: 23.01.2019
 * Time: 17:50
 */

/* @var $this \yii\web\View */

/* @var $content string */
use yii\grid\GridView;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\models\ProductPhoto;
use yii\data\ActiveDataProvider;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\LinkPager;


$this->title = 'Goods';
$this->params['breadcrumbs'][] = $this->title;

    ?>
                   <div class="col-md-12">
					<div class="section-title">
						<h2 class="title"><?= $category ?></h2>
						<div class="pull-right">
						   <h3 class="title"> Order by: </h3>

						    <ul style="float: right; margin-top: 12px;" >
								<li>  <?= $sort->link('name') ?>  </li>
								<li>  <?= $sort->link('price') ?>   </li>

					    </ul>


					  </div>
					</div>
				</div>




     <div class = "row">




<?php
    foreach  ($dataProvider->models as $goods) {
        $url = Url::toRoute( [ 'goods/product', 'id' => $goods->id] );
        $name = ProductPhoto::find()->where(['product_id' => $goods->id])->one();;
?>
        <div class = "col-md-3 col-sm-6 col-xs-6">
        <div class = "product product-single">




         <div class = "product-thumbbbb">
                       <div class="product-label">
                                <?php
                               $d = $goods->getDiscount();
                               if ($d!==null)
                               {
                                   echo '<span class="sale">-'.$d.'%</span>';

                               }
                               if($goods->isNew())
                               {
                                echo '<span>New</span>';
                               }
                                ?>



							</div>
           <a href = <?=HTML::encode($url)?>  >
             <img style = " height: 200px;" src="  <?= Yii::$app->params['basePath'] . '/images/product_images/'. HTML::encode($name->image_name)?>" >
            </a>
             </div>

          <div class = "product-body">
            <div class="name">
            <a  href=   <?=HTML::encode($url)?> > <?=  HTML::encode($goods->name) ?></a>
            </div>
            <div class="product-price"> <?=  HTML::encode($goods->price)  ?>
            </div>
            </div>

        <?php


        if ($goods->availability <= 0)
        {
            echo 'Out of stock';

        }
        else if(Yii::$app->user->identity->status >= 2)
        {


           // goods/update?id=1
             echo '<form method="get" action="/goods/update">
               <input type="hidden" name="id" value="'.$goods->id.'">
                <button type="submit">Update</button>
               </form>';
        }

        echo '</div>'.'</div>';
    }
    echo LinkPager::widget(['pagination' =>  $dataProvider->pagination]);
echo '</div>';

 ?>