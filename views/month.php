<table class="month <?=$monthRendered?>">
<thead>
    <th colspan="8">
        <div class="btn-group btn-group-justified">
                <a href="" class="navigate btn btn-primary" data-show="<?=$monthRendered-1?>" data-hide="<?=$monthRendered?>">&#8678; <?=Yii::t('calendar','Previous')?></a>
                <a href="" class="navigate btn btn-primary disabled"><?=$title?></a>
                <!-- <a href="" class="navigate btn btn-primary disabled d-md-none d-lg-none"><?=$title?></a> -->
                <a href="" class="navigate btn btn-primary" data-show="<?=$monthRendered+1?>" data-hide="<?=$monthRendered?>"><?=Yii::t('calendar','Next')?> &#8680;</a>
        </div>
    </th>
</thead>
<thead>
<th><div class="d-xs-none d-sm-none d-md-inline"><?=Yii::t('calendar','Week')?></div><div class="d-lg-none"><?=Yii::t('calendar','W')?></div></th>
<th><div class="d-xs-none d-sm-none d-md-inline"><?=Yii::t('calendar','Monday')?></div><div class="d-lg-none"><?=Yii::t('calendar','Mo')?></div></th>
<th><div class="d-xs-none d-sm-none d-md-inline"><?=Yii::t('calendar','Tuesday')?></div><div class="d-lg-none"><?=Yii::t('calendar','Tu')?></div></th>
<th><div class="d-xs-none d-sm-none d-md-inline"><?=Yii::t('calendar','Wednesday')?></div><div class="d-lg-none"><?=Yii::t('calendar','We')?></div></th>
<th><div class="d-xs-none d-sm-none d-md-inline"><?=Yii::t('calendar','Thursday')?></div><div class="d-lg-none"><?=Yii::t('calendar','Th')?></div></th>
<th><div class="d-xs-none d-sm-none d-md-inline"><?=Yii::t('calendar','Friday')?></div><div class="d-lg-none"><?=Yii::t('calendar','Fr')?></div></th>
<th><div class="d-xs-none d-sm-none d-md-inline"><?=Yii::t('calendar','Saturday')?></div><div class="d-lg-none"><?=Yii::t('calendar','Sa')?></div></th>
<th><div class="d-xs-none d-sm-none d-md-inline"><?=Yii::t('calendar','Sunday')?></div><div class="d-lg-none"><?=Yii::t('calendar','Su')?></div></th>
</thead>

<?=$content?>

</table>