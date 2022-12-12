<?php


    namespace stankata90\yii2LinkPager;

    use yii\helpers\ArrayHelper;
    use yii\helpers\Html;

    class LinkPager extends \yii\widgets\LinkPager
    {
        /**
         * @var array HTML attributes which will be applied to all pagination container
         * @since 2.0.13
         */
        public $containerOptions = [ 'class' => 'paginating-container pagination-default'];

        protected function renderPageButtons()
        {
            $options = $this->containerOptions;
            $tag = ArrayHelper::remove($options, 'tag', 'div');
            return Html::tag($tag, parent::renderPageButtons(), $options);
        }

    }